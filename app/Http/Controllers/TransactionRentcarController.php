<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentcar;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionRentcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentcar = Rentcar::all();
        return view('user.rentcar.index', compact('rentcar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'tujuan' => 'required',
            'ktp' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'driver' => 'required',
            'catatan' => 'required',
        ]);

        $file = $request->ktp->getClientOriginalName();
        $ktp = $request->ktp->storeAs('ktp', $file);

        Transaction::create([
            'user_id' => Auth::user()->id,
            'rentcar_id' => $request->rentcar_id,
            'tujuan' => $request->tujuan,
            'ktp' => $ktp,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'driver' => $request->driver,
            'catatan' => $request->catatan,
        ]);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rentcar = Rentcar::findOrFail($id);
        return view('user.rentcar.show', compact('rentcar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
