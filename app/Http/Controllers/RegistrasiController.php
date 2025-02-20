<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = Registrasi::all();
        return view('Registrasi.index', compact('registrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registrasi = new Registrasi;
        $registrasi->nama_lengkap = $request->nama_lengkap;
        $registrasi->jenis_kelamin = $request->jenis_kelamin;
        $registrasi->tanggal_lahir = $request->tanggal_lahir;
        $registrasi->agama = $request->agama;
        $registrasi->asal_sekolah = $request->asal_sekolah;
        $registrasi->save();

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('Registrasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        return view('Registrasi.show', compact('registrasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        return view('Registrasi.edit', compact('registrasi'));
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
        $registrasi = Registrasi::findOrFail($id);
        $registrasi->nama_lengkap = $request->nama_lengkap;
        $registrasi->jenis_kelamin = $request->jenis_kelamin;
        $registrasi->tanggal_lahir = $request->tanggal_lahir;
        $registrasi->agama = $request->agama;
        $registrasi->asal_sekolah = $request->asal_sekolah;
        $registrasi->save();

        session()->flash('success', 'Data berhasil diubah');
        return redirect()->route('Registrasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        $registrasi->delete();

        return redirect()->route('Registrasi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
