<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ppdbs', function (Blueprint $table) {
            // Cek apakah kolom sudah ada sebelum menambahkan
            if (!Schema::hasColumn('ppdbs', 'user_id')) {
                $table->foreignId('user_id')->after('id')->nullable();
            }
            
            if (!Schema::hasColumn('ppdbs', 'tahun_ajaran')) {
                $table->string('tahun_ajaran')->after('user_id')->nullable();
            }
        });

        // Update data existing dengan nilai yang valid
        $currentYear = now()->year;
        $tahunAjaran = ($currentYear - 1) . '/' . $currentYear;
        
        // Ambil user pertama sebagai default
        $defaultUserId = DB::table('users')->first()->id ?? 1;
        
        // Update semua record existing
        DB::table('ppdbs')->update([
            'user_id' => $defaultUserId,
            'tahun_ajaran' => $tahunAjaran
        ]);

        // Hapus data duplicate, keep only the latest record per user per tahun ajaran
        $duplicates = DB::table('ppdbs')
            ->select('user_id', 'tahun_ajaran', DB::raw('MAX(id) as max_id'))
            ->groupBy('user_id', 'tahun_ajaran')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($duplicates as $duplicate) {
            DB::table('ppdbs')
                ->where('user_id', $duplicate->user_id)
                ->where('tahun_ajaran', $duplicate->tahun_ajaran)
                ->where('id', '!=', $duplicate->max_id)
                ->delete();
        }

        // Sekarang buat kolom required
        Schema::table('ppdbs', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable(false)->change();
            $table->string('tahun_ajaran')->nullable(false)->change();
        });

        // Tambah foreign key constraint
        try {
            Schema::table('ppdbs', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        } catch (\Exception $e) {
            // Foreign key constraint sudah ada, skip
        }

        // Tambah unique constraint
        Schema::table('ppdbs', function (Blueprint $table) {
            $table->unique(['user_id', 'tahun_ajaran'], 'ppdbs_user_tahun_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppdbs', function (Blueprint $table) {
            if (Schema::hasColumn('ppdbs', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
            
            if (Schema::hasColumn('ppdbs', 'tahun_ajaran')) {
                $table->dropColumn('tahun_ajaran');
            }
        });

        // Drop unique constraint jika ada
        try {
            Schema::table('ppdbs', function (Blueprint $table) {
                $table->dropUnique('ppdbs_user_tahun_unique');
            });
        } catch (\Exception $e) {
            // Constraint tidak ada, skip
        }
    }
};
