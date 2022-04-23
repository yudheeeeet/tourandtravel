<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentcar;
use Illuminate\Support\Facades\Storage;

class RentcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentcar = Rentcar::all();
        return view('rentcar.index', compact('rentcar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rentcar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|mimes:jpg,jpeg,png',
        ]);

        $file = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('rentcar', $file);
        // dd('success');

        Rentcar::create([
            'name' => $request->name,
            'foto' => $foto,
            'plat' => $request->plat,
            'warna' => $request->warna,
            'stnk' => $request->stnk,
            'bpkb' => $request->bpkb,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);


        return redirect('/rentcar/data')->with('status', 'Berhasil menambahkan data');
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
        $rentcar = Rentcar::where('id', $id)->first();
        return view('rentcar.edit', compact('rentcar'));
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
        $rentcar = Rentcar::findOrFail($id);
        if ($request->hasFile('foto')) {
            // dd($id, $request->all());
            if (Storage::exists($rentcar->foto)) {
                Storage::delete($rentcar->foto);
            }
            $file = $request->foto->getClientOriginalName();
            $foto = $request->foto->storeAs('rentcar', $file);
            $rentcar->update([
                'foto' => $foto
            ]);
        }


        $rentcar->update([
            'name' => $request->name,
            // 'foto' => $foto,
            'plat' => $request->plat,
            'warna' => $request->warna,
            'stnk' => $request->stnk,
            'bpkb' => $request->bpkb,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return redirect('/rentcar/data')->with('status', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $rentcar = Rentcar::findOrFail($id);
        Storage::delete($rentcar->foto);
        $rentcar->delete();

        return redirect('/rentcar/data')->with('status', 'Berhasil menghapus data');
    }
}
