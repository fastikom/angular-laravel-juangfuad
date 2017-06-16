<?php

use Illuminate\Database\Seeder;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Mhs::insert([
        	[
        		'NIM' => '2014150033',
        		'nama' => 'Triaji Gunawan',
        		'alamat' => 'Wonosobo'
        	],
        	[
        		'NIM' => '2014150003',
        		'nama' => 'Miryanto',
        		'alamat' => 'Wonosobo'
        	],
        	[
        		'NIM' => '2014150016',
        		'nama' => 'Erfan Nurohman',
        		'alamat' => 'Wonosobo'
        	]
        ]);
    }
}
