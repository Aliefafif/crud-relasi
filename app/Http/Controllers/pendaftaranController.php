<?php
namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = pendaftaran::latest()->get();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran                = new pendaftaran();
        $pendaftaran->nik           = $request->nik;
        $pendaftaran->nama_lengkap  = $request->nama_lengkap;
        $pendaftaran->agama         = $request->agama;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->asal_sekolah  = $request->asal_sekolah;
        $pendaftaran->alamat        = $request->alamat;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
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
        $pendaftaran                = pendaftaran::findOrFail($id);
        $pendaftaran->nik           = $request->nik;
        $pendaftaran->nama_lengkap  = $request->nama_lengkap;
        $pendaftaran->agama         = $request->agama;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->asal_sekolah  = $request->asal_sekolah;
        $pendaftaran->alamat        = $request->alamat;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index');
    }
}
