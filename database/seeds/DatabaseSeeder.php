<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model ;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(FixerSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(AdminSeeder::class);
        Model::reguard();
    }
}
