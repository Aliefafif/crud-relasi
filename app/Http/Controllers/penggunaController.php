<?php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// // validasi
// $validated = $request->validate([
//     'nama'      => 'required|unique:penggunas', ]);

        $pengguna       = new pengguna();
        $pengguna->nama = $request->nama;

// if ($request->hasFile('foto')) {
//     $img  = $request->file('foto');
//     $name = rand(1000, 9999) . $img->getClientOriginalName();
//     $img->move('storage/buku', $name);
//     $buku->foto = $name;
// }

        $pengguna->save();
        return redirect()->route('Pengguna.index')->with('success', 'Data erhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('Pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $pengguna       = Pengguna::findOrFail($id);
        $pengguna->nama = $request->nama;

        // if ($request->hasFile('foto')) {
        //     $buku->deleteimage();
        //     $img  = $request->file('foto');
        //     $name = rand(1000, 9999) . $img->getClientOriginalName();
        //     $img->move('storage/buku', $name);
        //     $buku->foto = $name;
        // }

        $pengguna->save();
        return redirect()->route('Pengguna.index')->with('success', 'Data Berhasil Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('Pengguna.index');
    }
}
