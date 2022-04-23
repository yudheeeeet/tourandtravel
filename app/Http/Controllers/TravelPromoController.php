<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TravelPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = DB::table('travels')->where('jenis', '=', 'promo')->get();

        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
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
        $foto = $request->foto->storeAs('promo', $file);

        Travel::create([
            'name' => $request->name,
            'foto' => $foto,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'waktu' => $request->waktu,
            'jumlah' => $request->jumlah,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/promo/data')->with('status', 'Berhasil menambahkan data');
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
        $promo = Travel::findOrFail($id);
        return view('promo.edit', compact('promo'));
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
        $promo = Travel::findOrFail($id);
        if ($request->hasFile('foto')) {
            // dd($id, $request->all());
            if (Storage::exists($promo->foto)) {
                Storage::delete($promo->foto);
            }
            $file = $request->foto->getClientOriginalName();
            $foto = $request->foto->storeAs('promo', $file);
            $promo->update([
                'foto' => $foto
            ]);
        }

        $promo->update([
            'name' => $request->name,
            // 'foto' => $foto,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'waktu' => $request->waktu,
            'jumlah' => $request->jumlah,
            'deadline' => $request->deadline,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect('/promo/data')->with('status', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Travel::findOrFail($id);
        Storage::delete($promo->foto);
        $promo->delete();

        return redirect('/promo/data')->with('status', 'Berhasil Menghapus Data');
    }
}
