<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Travel;
use App\Models\Rentcar;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $fillable = ['user_id', 'travel_id', 'rentcar_id', 'ktp', 'tujuan', 'driver', 'waktu', 'jumlah', 'catatan', 'status', 'slip'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }

    public function rentcar()
    {
        return $this->belongsTo(Rentcar::class);
    }

}
