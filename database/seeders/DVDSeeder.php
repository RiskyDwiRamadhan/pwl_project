<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'id_dvd' => '1',
            'nama_dvd' =>'BAD BOYS',
            'harga_dvd' => '15000',
            'status_dvd' => 'belum dipinjam',
            'stok' => '5',
            'image_dvd' => '/template/images/BAD BOYS.jpg'
        ],[
            'id_dvd' => '2',
            'nama_dvd' =>'GANGSTER',
            'harga_dvd' => '15000',
            'status_dvd' => 'belum dipinjam',
            'stok' => '5',
            'image_dvd' => '/template/images/GANGSTER.jpg'
        ],[
            'id_dvd' => '3',
            'nama_dvd' =>'KOMEDI MODEREN',
            'harga_dvd' => '15000',
            'status_dvd' => 'belum dipinjam',
            'stok' => '5',
            'image_dvd' => '/template/images/KOMEDI MODEREN.jpg'
        ],[
            'id_dvd' => '4',
            'nama_dvd' =>'IRON MAN 1',
            'harga_dvd' => '15000',
            'status_dvd' => 'belum dipinjam',
            'stok' => '5',
            'image_dvd' => '/template/images/iron man 1.jpg'
        ],[
            'id_dvd' => '5',
            'nama_dvd' =>'IRON MAN 2',
            'harga_dvd' => '15000',
            'status_dvd' => 'belum dipinjam',
            'stok' => '5',
            'image_dvd' => '/template/images/iron man 2.jpg'
        ]    
        ];
        DB::table('dvd')->insert($data);
    }
}
