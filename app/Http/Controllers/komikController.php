<?php
namespace App\Http\Controllers;

use App\Models\komik;
use Illuminate\Http\Request;
use Storage;

class KomikController extends Controller
{
    public function index()
    {
        $komik = Komik::all();
        return view('komik.index', compact('komik'));
    }

    public function create()
    {
        return view('komik.create');
    }

    public function store(Request $request)
    {
        // // validasi
        // $validated = $request->validate([
        //     'nama_komik'      => 'required|unique:komiks',
        //     'genre_komik'          => 'required',
        //     'harga'          => 'required|numeric',
        //     'stok'           => 'required|numeric',
        //     'penerbit'       => 'required',
        //     'tanggal_terbit' => 'required',
        //     'foto'           => 'required|mimes:jpg,png|max:1024',
        // ]);

        $komik                 = new Komik();
        $komik->nama_komik      = $request->nama_komik;
        $komik->genre_komik     = $request->genre_komik;
        $komik->harga          = $request->harga;
        $komik->stok           = $request->stok;
        $komik->penerbit       = $request->penerbit;
        $komik->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/komik', $name);
            $komik->foto = $name;
        }

        $komik->save();
        return redirect()->route('komik.index')->with('success', 'Data erhasil disimpan');
    }

    public function show($id)
    {
        $komik = komik::findOrFail($id);
        return view('komik.show', compact('komik'));
    }

    public function edit($id)
    {
        $komik = komik::findOrFail($id);
        return view('komik.edit', compact('komik'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_komik'      => 'required',
            'genre_komik'     => 'required',
            'harga'          => 'required|numeric',
            'stok'           => 'required|numeric',
            'penerbit'       => 'required',
            'tanggal_terbit' => 'required',
            'foto'           => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $komik                 = Komik::findOrFail($id);
        $komik->nama_komik      = $request->nama_komik;
        $komik->genre_komik     = $request->genre_komik;
        $komik->harga          = $request->harga;
        $komik->stok           = $request->stok;
        $komik->penerbit       = $request->penerbit;
        $komik->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('foto')) {
            $komik->deleteimage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/komik', $name);
            $komik->foto = $name;
        }

        $komik->save();
        return redirect()->route('komik.index')->with('success', 'Data Berhasil Ubah');
    }

    public function destroy($id)
    {
        $komik = komik::findOrFail($id);
        // Hapus Gambar yang Lama jika ada
        if ($komik->foto && Storage::exists('public/komik/' . $komik->foto)) {
            Storage::delete('public/komik/' . $komik->foto);
        }

        $komik->delete();
        return redirect()->route('komik.index')->with('success', 'Data Berhasil Di hapus');
    }
}
