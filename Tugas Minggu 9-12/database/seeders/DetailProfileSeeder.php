<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
    	DB::table('detail_profile')->insert([
            'name' => 'Lailatul Khusnia',
    		'address' => 'Pasuruan',
    		'nomor_tlp' => '085645325790',
    		'ttl' => '2003-2-18',
    		'foto' => 'picture.png'



    	]);

    }
}
