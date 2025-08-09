<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Ppdb;
use App\Models\Berita;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AssalamController extends Controller
{
    public function index()
    {
        // Get latest news for homepage
        $latestBerita = Berita::where('status', 'published')
                            ->latest()
                            ->take(3)
                            ->get();
        return view('index', compact('latestBerita')); 
    }
    
    // Untuk halaman form feedback
    public function create()
    {
        return view('layoutes.kontak'); 
    }

    // Simpan data feedback
    public function storeFeedback(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'eaddress' => 'required|email',
            'tel' => 'required',
            'message' => 'required',
        ]);

        Feedback::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->eaddress,
            'phone' => $request->tel,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    // Untuk halaman form PPDB
    public function ppdbForm()
    {
        return view('pages.ppdb-form');
    }

    // Simpan data PPDB
    public function storePpdb(Request $request)
    {
        // Cek kuota
        $setting = PpdbSetting::orderByDesc('id')->first();
        $kuota = $setting ? $setting->kuota : null;
        $tahun_ajaran = $setting ? $setting->tahun_ajaran : null;
        $pendaftar = $tahun_ajaran ? Ppdb::where('created_at', '>=', now()->startOfYear())->count() : 0;
        if ($kuota && $pendaftar >= $kuota) {
            return redirect()->back()->withErrors(['Kuota pendaftaran sudah penuh.'])->withInput();
        }
        // Normalisasi angka-only agar validasi unik konsisten (hapus spasi/tanda baca)
        $input = $request->all();
        foreach (['nisn', 'nik', 'nik_ayah', 'nik_ibu', 'no_kk', 'no_telp'] as $field) {
            if (isset($input[$field]) && $input[$field] !== null) {
                $input[$field] = preg_replace('/\D/', '', (string) $input[$field]);
            }
        }

        // Validasi PPDB
        $rules = [
            'nama_lengkap' => ['required', 'string'],
            'nisn' => [
                'required',
                'digits:10',
                Rule::unique('ppdbs', 'nisn')
                    ->where(fn($q) => $q->where('created_at', '>=', now()->startOfYear())),
            ],
            'asal_sekolah' => ['nullable', 'string'],
            'nik' => [
                'nullable',
                'digits:16',
                Rule::unique('ppdbs', 'nik')
                    ->where(fn($q) => $q->where('created_at', '>=', now()->startOfYear())),
            ],
            'jenis_kelamin' => ['nullable', Rule::in(['Laki-laki', 'Perempuan'])],
            'tempat_lahir' => ['nullable', 'string'],
            'tanggal_lahir' => ['nullable', 'date'],
            'alamat_lengkap' => ['nullable', 'string'],
            'tinggal_bersama' => ['nullable', Rule::in(['Orang Tua', 'Wali', 'Pondok Pesantren', 'Asrama', 'Lainnya'])],
            'no_telp' => ['nullable', 'string'],
            'jumlah_saudara' => ['nullable', 'integer', 'min:1', 'max:10'],
            'no_kk' => ['nullable', 'string'],
            'nama_ayah' => ['nullable', 'string'],
            'nik_ayah' => ['nullable', 'digits:16'],
            'pendidikan_ayah' => ['nullable', Rule::in(['Tidak Sekolah', 'Tamat SD/MI', 'Tamat SMP/MTs.', 'Tamat SMA/SMK/MA', 'Diploma', 'S1/S2'])],
            'pekerjaan_ayah' => ['nullable', 'string'],
            'nama_ibu' => ['nullable', 'string'],
            'nik_ibu' => ['nullable', 'digits:16'],
            'pendidikan_ibu' => ['nullable', Rule::in(['Tidak Sekolah', 'Tamat SD/MI', 'Tamat SMP/MTs.', 'Tamat SMA/SMK/MA', 'Diploma', 'S1/S2'])],
            'pekerjaan_ibu' => ['nullable', 'string'],
            'alamat_ortu' => ['nullable', 'string'],
        ];

        $messages = [
            'nisn.required' => 'NISN wajib diisi.',
            'nisn.digits' => 'NISN harus terdiri dari tepat 10 digit angka.',
            'nisn.unique' => 'NISN sudah terdaftar pada tahun ajaran berjalan.',
            'nik.digits' => 'NIK harus terdiri dari tepat 16 digit angka.',
            'nik.unique' => 'NIK sudah terdaftar pada tahun ajaran berjalan.',
            'nik_ayah.digits' => 'NIK Ayah harus 16 digit angka.',
            'nik_ibu.digits' => 'NIK Ibu harus 16 digit angka.',
        ];

        $validator = Validator::make($input, $rules, $messages);

        // Tidak ada validasi lanjutan untuk NIK (hanya 16 digit)

        $validated = $validator->validate();
        Ppdb::create($validated);
        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
    public function fasilitas()
    {
        return view('pages.fasilitas');
    }

    public function kegiatan()
    {
        return view('pages.kegiatan');
    }
    
    /**
     * Menampilkan daftar berita untuk user
     */
    public function beritaIndex()
    {
        $beritas = Berita::where('status', 'published')
                        ->latest()
                        ->paginate(6);
        return view('layoutes.berita', compact('beritas'));
    }
    
    /**
     * Menampilkan detail berita
     */
    public function beritaShow(Berita $berita)
    {
        // Only show published news
        if ($berita->status !== 'published') {
            abort(404);
        }
        
        // Get related news
        $relatedNews = Berita::where('id', '!=', $berita->id)
                            ->where('status', 'published')
                            ->latest()
                            ->take(3)
                            ->get();
                            
        return view('layoutes.berita-detail', compact('berita', 'relatedNews'));
    }
    
    // Untuk halaman admin dashboard
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
