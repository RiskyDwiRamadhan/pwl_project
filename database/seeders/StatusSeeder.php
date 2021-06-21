<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'status' =>'belum dipinjam',
        ],[
            'status' => 'dipinjam',
        ],[
            'status' => 'dikembalikan',
        ]
        ];
        DB::table('status')->insert($data);
    }
}
