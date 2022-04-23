<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TravelRegulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reguler = DB::table('travels')->where('jenis', '=', 'reguler')->get();
        return view('reguler.index', compact('reguler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reguler.create');
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
            'name' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
            'jenis' => 'required',
            'harga' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required',
        ]);

        $file = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('reguler', $file);

        Travel::create([
            'name' => $request->name,
            'foto' => $foto,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'waktu' => $request->waktu,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/reguler/data')->with('status', 'Berhasil menambahkan data');
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
        $reguler = Travel::findOrFail($id);
        return view('reguler.edit', compact('reguler'));
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
        $reguler = Travel::findOrFail($id);
        if ($request->hasFile('foto')) {
            // dd($id, $request->all());
            if (Storage::exists($reguler->foto)) {
                Storage::delete($reguler->foto);
            }
            $file = $request->foto->getClientOriginalName();
            $foto = $request->foto->storeAs('reguler', $file);
            $reguler->update([
                'foto' => $foto
            ]);
        }

        $reguler->update([
            'name' => $request->name,
            // 'foto' => $foto,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'waktu' => $request->waktu,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect('/reguler/data')->with('status', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reguler = Travel::findOrFail($id);
        Storage::delete($reguler->foto);
        $reguler->delete();

        return redirect('/reguler/data')->with('status', 'Berhasil Menghapus Data');
    }
}
