<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rentcar;

class IndexController extends Controller
{
    public function index()
    {
        $promo = DB::table('travels')->where('jenis', '=', 'promo')->get();
        return view('index', compact('promo'));
    }

    public function rentcar()
    {
        $rentcar = Rentcar::all();
        return view('rentcar-dashboard', compact('rentcar'));
    }

    public function reguler()
    {
        $reguler = DB::table('travels')->where('jenis', '=', 'reguler')->get();
        return view('travel-reguler', compact('reguler'));
    }

    public function promo()
    {
        $promo = DB::table('travels')->where('jenis', '=', 'promo')->get();
        return view('travel-promo', compact('promo'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}
