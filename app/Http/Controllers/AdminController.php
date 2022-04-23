<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function admin()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        return view('admin', compact('user'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        // dd($user);

        return view('admin-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'hp' => 'required',
            'bank' => 'required',
            'rekening' => 'required',
        ]);

        $user = User::where('id', $id)->first();
        $user->update($data);


        return back();
    }

    public function show()
    {
        $transaction = Transaction::has('rentcar')->get();
        $transaction->load(['rentcar', 'user']);
        return view('admin.index', compact('transaction'));
    }

    public function edit_transaction($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->load(['rentcar', 'user']);
        return view('admin.edit', compact('transaction'));
    }

    public function update_transaction(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update([
            'status' => $request->status
        ]);
        return redirect('/admin/index')->with('status', 'Berhasil Mengupdate Pemesanan');
    }
}
