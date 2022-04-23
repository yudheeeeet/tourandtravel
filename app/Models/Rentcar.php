<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentcar extends Model
{
    use HasFactory;

    protected $table = 'rentcar';
    protected $fillable = ['name', 'foto', 'plat', 'warna', 'stnk', 'bpkb', 'harga', 'status'];
}
