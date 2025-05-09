<?php
namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class obatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat                 = new Obat();
        $obat->nama_obat      = $request->nama_obat;
        $obat->jenis_obat     = $request->jenis_obat;
        $obat->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $obat->harga          = $request->harga;
        $obat->save();
        return redirect()->route('obat.index')->with('success', 'Data erhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
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

        $obat                 = Obat::findOrFail($id);
        $obat->nama_obat      = $request->nama_obat;
        $obat->jenis_obat     = $request->jenis_obat;
        $obat->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        $obat->harga          = $request->harga;
        $obat->save();

        return redirect()->route('obat.index')->with('success', 'Data Berhasil Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return redirect()->route('obat.index');
    }

}
