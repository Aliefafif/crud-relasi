<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Storage;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        // // validasi
        // $validated = $request->validate([
        //     'nama_buku'      => 'required|unique:bukus',
        //     'genre_buku'          => 'required',
        //     'harga'          => 'required|numeric',
        //     'stok'           => 'required|numeric',
        //     'penerbit'       => 'required',
        //     'tanggal_terbit' => 'required',
        //     'foto'           => 'required|mimes:jpg,png|max:1024',
        // ]);

        $buku                 = new Buku();
        $buku->nama_buku      = $request->nama_buku;
        $buku->genre_buku     = $request->genre_buku;
        $buku->harga          = $request->harga;
        $buku->stok           = $request->stok;
        $buku->penerbit       = $request->penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $buku->foto = $name;
        }

        $buku->save();
        return redirect()->route('Buku.index')->with('success', 'Data erhasil disimpan');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_buku'      => 'required',
            'genre_buku'     => 'required',
            'harga'          => 'required|numeric',
            'stok'           => 'required|numeric',
            'penerbit'       => 'required',
            'tanggal_terbit' => 'required',
            'foto'           => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $buku                 = Buku::findOrFail($id);
        $buku->nama_buku      = $request->nama_buku;
        $buku->genre_buku     = $request->genre_buku;
        $buku->harga          = $request->harga;
        $buku->stok           = $request->stok;
        $buku->penerbit       = $request->penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('foto')) {
            $buku->deleteimage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $buku->foto = $name;
        }

        $buku->save();
        return redirect()->route('Buku.index')->with('success', 'Data Berhasil Ubah');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        // Hapus Gambar yang Lama jika ada
        if ($buku->foto && Storage::exists('public/buku/' . $buku->foto)) {
            Storage::delete('public/buku/' . $buku->foto);
        }

        $buku->delete();
        return redirect()->route('Buku.index')->with('success', 'Data Berhasil Di hapus');
    }
}
