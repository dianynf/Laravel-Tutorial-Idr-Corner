<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Prodi;
use App\Beasiswa;
use Illuminate\Http\Request;

use App\Http\Requests\AlumniRequest;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.index')->withAlumnis(Alumni::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk relasi banyak tebel, masukkan terlebih dahulu data2 ke dalam variabel
        $prodis = Prodi::all();
        $beasiswas = Beasiswa::all();

        return view('alumni.form', compact('prodis', 'beasiswas'));
        // return view('alumni.form')->withProdis(Prodi::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->foto->store('img');
        Alumni::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $image,
            'angkatan' => $request->angkatan,
            'status_kerja' => $request->status_kerja,
            'tmp_kerja' => $request->tmp_kerja,
            'beastudi_id' => $request->beasiswa_id,
            'prodi_id' => $request->prodi_id
        ]);
        session()->flash('sukses', 'Data Berhasil Di Tambahkan');
        return redirect(route('alumni.index'));
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
    public function edit(Alumni $alumni)
    {
        return view('alumni.form')->withAlumni($alumni);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $alumni::update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'angkatan' => $request->angkatan,
            'status_kerja' => $request->status_kerja,
            'tmp_kerja' => $request->tmp_kerja,
            'beasiswa_id' => $request->beasiswa_id,
            'alumni_id' => $request->alumni_id
        ]);

        session()->flash('sukses', 'alumni berhasil di ubah');
        return redirect(route('alumni.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        $alumni->delete();
        session()->flash('sukses', 'alumni berhasil di hapus');
        return redirect(route('alumni.index'));
    }
}
