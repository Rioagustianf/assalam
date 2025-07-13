<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Ppdb;
use App\Models\Berita;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;

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
        $request->validate([
            'nama_lengkap' => 'required',
            'nisn' => 'required',
            'asal_sekolah' => 'nullable',
            'nik' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable|date',
            'alamat_lengkap' => 'nullable',
            'tinggal_bersama' => 'nullable',
            'no_telp' => 'nullable',
            'jumlah_saudara' => 'nullable|integer|min:1|max:10',
            'no_kk' => 'nullable',
            'nama_ayah' => 'nullable',
            'nik_ayah' => 'nullable',
            'pendidikan_ayah' => 'nullable',
            'pekerjaan_ayah' => 'nullable',
            'nama_ibu' => 'nullable',
            'nik_ibu' => 'nullable',
            'pendidikan_ibu' => 'nullable',
            'pekerjaan_ibu' => 'nullable',
            'alamat_ortu' => 'nullable',
        ]);
        Ppdb::create($request->all());
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
