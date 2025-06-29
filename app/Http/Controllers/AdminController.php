<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Ppdb;
use App\Models\Berita;
use App\Exports\PpdbExport;
use App\Exports\FeedbackExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman login admin
     */
    public function loginForm()
    {
        return view('admin.login');
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Menampilkan dashboard admin
     */
    public function dashboard()
    {
        // Mengambil data untuk dashboard
        $totalPpdb = Ppdb::count();
        $totalFeedback = Feedback::count();
        $totalBerita = Berita::count();
        
        return view('admin.dashboard', compact('totalPpdb', 'totalFeedback', 'totalBerita'));
    }

    /**
     * Menampilkan data PPDB
     */
    public function ppdbList()
    {
        $ppdbs = Ppdb::latest()->paginate(10);
        return view('admin.ppdb', compact('ppdbs'));
    }

    /**
     * Menampilkan data feedback
     */
    public function feedbackList()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('admin.feedback', compact('feedbacks'));
    }

    /**
     * Export data PPDB ke Excel
     */
    public function exportPpdb()
    {
        return Excel::download(new PpdbExport, 'ppdb-data.xlsx');
    }

    /**
     * Export data feedback ke Excel
     */
    public function exportFeedback()
    {
        return Excel::download(new FeedbackExport, 'feedback-data.xlsx');
    }

    /**
     * Menampilkan daftar berita
     */
    public function beritaList()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Menampilkan form tambah berita
     */
    public function beritaCreate()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru
     */
    public function beritaStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:published,draft',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file directly to the public directory
            $image->move(public_path('uploads/berita'), $imageName);
            $data['image'] = 'uploads/berita/' . $imageName;
        }

        Berita::create($data);

        return redirect()->route('admin.berita')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit berita
     */
    public function beritaEdit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update berita
     */
    public function beritaUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:published,draft',
        ]);

        $berita = Berita::findOrFail($id);
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        // Upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($berita->image && file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the uploaded file directly to the public directory
            $image->move(public_path('uploads/berita'), $imageName);
            $data['image'] = 'uploads/berita/' . $imageName;
        }

        $berita->update($data);

        return redirect()->route('admin.berita')
            ->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Hapus berita
     */
    public function beritaDestroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($berita->image) {
            Storage::delete('public/' . $berita->image);
        }
        
        $berita->delete();

        return redirect()->route('admin.berita')
            ->with('success', 'Berita berhasil dihapus');
    }

    /**
     * Proses logout admin
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
