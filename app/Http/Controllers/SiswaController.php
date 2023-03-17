<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required',
        ]);

        $create = Siswa::create([
            'nisn' => $request->get('nisn'),
            'nis' => $request->get('nis'),
            'nama' => $request->get('nama'),
            'id_kelas' => $request->get('id_kelas'),
            'alamat' => $request->get('alamat'),
            'no_telp' => $request->get('no_telp'),
            'id_spp' => $request->get('id_spp'),
        ]);

        if($create) {
            return redirect()->route('siswa.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);

        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required',
        ]);
        $update = $siswa->update([
            'nisn' => $request->get('nisn'),
            'nis' => $request->get('nis'),
            'nama' => $request->get('nama'),
            'id_kelas' => $request->get('id_kelas'),
            'alamat' => $request->get('alamat'),
            'no_telp' => $request->get('no_telp'),
            'id_spp' => $request->get('id_spp'),
        ]);
        if($update) {
            return redirect()->route('siswa.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
