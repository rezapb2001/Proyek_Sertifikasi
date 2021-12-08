<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

/*logika dan alur sistem yang akan dibuat.*/

class ControllerSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*menampilkan semua data dan mengirimkan nilai layout*/
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*menamppilkan form input data dan mengirimkan nilai layout*/
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*mengecek apakah sudah ada file gambar atau tidak*/
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);


            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = ' ';
        }

        /*membuat data baru*/
        $siswa = new Siswa();
        $siswa->noinduk = $request->input('noinduk');
        $siswa->foto = $nama_foto;
        $siswa->namapanjang = $request->input('namapanjang');
        $siswa->nama = $request->input('nama');
        $siswa->umur = $request->input('umur');
        $siswa->minat = $request->input('minat');
        $siswa->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'siswa' => $siswa, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*menuju halaman untuk proses edit mengirim nilai id dan layout*/
        $siswa = Siswa::find($id);
        $siswas = Siswa::all();
        return view('siswa', ['siswas' => $siswas, 'siswa' => $siswa, 'layout' => 'edit']);
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
        /*melakukan pengecekan file gambar apakah sama dengan file sebelumnya atau tidak*/
        if (!is_null($request->foto)) {

            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            /* menyimpan data file yang diupload ke variabel $file*/
            $foto = $request->file('foto');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'image';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = " ";
        }

        /*mencari dan melakukan edit file */
        $siswa = Siswa::find($id);
        $siswa->noinduk = $request->input('noinduk');
        /*mengecek kembali file foto jika tidak kosong file yang akan disimpan */
        if ($nama_foto != " ") {
            $siswa->foto = $nama_foto;
        }
        $siswa->namapanjang = $request->input('namapanjang');
        $siswa->nama = $request->input('nama');
        $siswa->umur = $request->input('umur');
        $siswa->minat = $request->input('minat');
        $siswa->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // mencari dan melakukan proses delete
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/');
    }
}
