<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jurusan.index', [
            'jurusans'  => Jurusan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_jurusan   = $request->validate([
            'nama_jurusan'  => ['required']
        ]);

        Jurusan::create($data_jurusan);
        return redirect('jurusan/index')->with('success', "Data Jurusan Berhasi di tambah");
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
    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', [
            'jurusan'   => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jurusan $jurusan)
    {
        $data_jurusan   = $request->validate([
            'nama_jurusan'  =>  ['required']
        ]);

        $jurusan->update($data_jurusan);
        return redirect('/jurusan/index')->with('success', "Data Jurusan berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        $kelas = Kelas::where('jurusan_id', $jurusan->id)->first();
        if ($kelas) {
            return back()->with('error', "$jurusan->nama_jurusan Masih digunakan dimenu kelas");
        }

        $jurusan->delete();
        return back()->with('success', "data Jurusan berhasil diapus");
    }
}
