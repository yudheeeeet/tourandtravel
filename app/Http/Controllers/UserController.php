<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function user()
    {
        $user = User::where('id', session('id'))->first();
        $promo = DB::table('travels')->where('jenis', '=', 'promo')->get();

        return view('user', compact('user', 'promo'));    
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        // dd($user);

        return view('user-edit', compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'hp' => 'required',
            'bank' => 'required',
            'rekening' => 'required',
        ]);

        // dd($data);
        
        $user = User::where('id', $id)->first();
        $user->update($data);
        // dd($data);


        return back();
    }

    public function reguler()
    {
        $reguler = DB::table('travels')->where('jenis', '=', 'reguler')->get();

        return view('user.travel-reguler', compact('reguler'));
    }

    public function promo()
    {
        $promo = DB::table('travels')->where('jenis', '=', 'promo')->get();

        return view('user.travel-promo', compact('promo'));
    }

    public function travel()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        $transaction = $user->transactions()->has('travel')->get();
        
        // dd($transaction);
        // $transaction->load(['travel']);


        return view('user.transaction.travel', compact('user','transaction'));
    }

    public function edit_travel($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->load(['travel', 'user']);

        return view('user.transaction.edit_travel', compact('transaction'));
    }

    public function update_travel(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        if ($request->hasFile('slip')) {
            // dd($id, $request->all());
            if (Storage::exists($transaction->slip)) {
                Storage::delete($transaction->slip);
            }
            $file = $request->slip->getClientOriginalName();
            $slip = $request->slip->storeAs('slip', $file);
            $transaction->update([
                'slip' => $slip
            ]);
        }

        return redirect('/user/transaction/travel');

    }

    public function rentcar()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        $transaction = $user->transactions()->has('rentcar')->get();

        return view('user.transaction.rentcar', compact('user', 'transaction'));
    }

    public function edit_rentcar($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->load(['rentcar', 'user']);

        return view('user.transaction.edit_rentcar', compact('transaction'));
    }

    public function update_rentcar(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        if ($request->hasFile('slip')) {
            // dd($id, $request->all());
            if (Storage::exists($transaction->slip)) {
                Storage::delete($transaction->slip);
            }
            $file = $request->slip->getClientOriginalName();
            $slip = $request->slip->storeAs('slip', $file);
            $transaction->update([
                'slip' => $slip
            ]);
        }

        return redirect('/user/transaction/rentcar');

    }
}
