<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fixers')->insert([
            'firstname' => 'Ahmed' ,
            'lastname' => 'Selim' ,
            'picture' => 'fixers/avatar5.png' ,
            'birth_date' => date('1997-2-7'), 
            'city' => 'Alex' ,
            'category' => 'Engineer'
        ]);
    }
}
