<?php

namespace App\Http\Controllers;

use App\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function hasil(){
        $pelamars = Pelamar::orderBy('nama', 'ASC')->get();
        return view('frontend.pengumuman', compact('pelamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.formulir');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ktp' => 'image|mimes:jpg,jpeg,png',
            'ijazah' => 'image|mimes:jpg,jpeg,png',
            'surat_keterangan' => 'image|mimes:jpg,jpeg,png',
        ]);


        $ktp = $request->file('ktp')->store('ktp');
        $ijazah = $request->file('ijazah')->store('ijazah');
        $keterangan = $request->file('surat_keterangan')->store('surat_keterangan');
        Pelamar::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'lulusan_sekolah' => $request->lulusan,
            'ktp' => $ktp,
            'ijazah' => $ijazah,
            'surat_keterangan_dokter' => $keterangan,
        ]);

        return redirect()->route('welcome')->with('success','Anda sudah terdaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelamar $pelamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        //
    }
}
