<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Alfikri Zaini H',
            'email' => 'alfikrizaini20@gmail.com',
            'jk' =>'Laki-laki',
            'password' => bcrypt('alfikri123'),
            'HP' => '+62 812-5912-5490',
            'Bank' => 'BNI',
            'Rekening' => '0603930497'
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Rachmat Bintang Yudhianto',
            'email' => 'rachmatbyudhianto974@gmail.com',
            'jk' =>'Laki-laki',
            'password' => bcrypt('ydth_2000'),
            'HP' => '082331781837',
            'Bank' => 'BNI',
            'Rekening' => '0603930497'
        ]);

        $user->assignRole('user');
    }
}
