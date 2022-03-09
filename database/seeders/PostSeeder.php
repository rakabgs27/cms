<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'nama_barang' => 'Bola basket',
            'harga_barang' => '50',
            'foto' => 'basketball.png'
        ],
        [
            'nama_barang' => 'T - Shirt',
            'harga_barang' => '100',
            'foto' => 't-shirt.png'
        ],
        [
            'nama_barang' => 'Pin Ball',
            'harga_barang' => '150',
            'foto' => 'game.png'
        ],
        [
            'nama_barang' => 'T - Shirt',
            'harga_barang' => '200',
            'foto' => 't-shirt.png'
        ],
        [
            'nama_barang' => 'Pin Ball',
            'harga_barang' => '250',
            'foto' => 'game.png'
        ],
        [
            'nama_barang' => 'Bola basket',
            'harga_barang' => '10',
            'foto' => 'basketball.png'
        ]
        ]);
    }
}
