<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 10,
            'time'=> 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'BBB001',
            'distance' => 50,
            'time'=> 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'APP001',
            'distance' => 10,
            'time'=> 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        DB::table('drivers')->insert([
            'name' => 'Ona',
            'city' => 'Trakai',
            ]);
        DB::table('drivers')->insert([
            'name' => 'Jonas',
            'city' => 'Vilnius',
            ]);
        DB::table('drivers')->insert([
            'name' => 'Pranas',
            'city' => 'Kaunas',
            ]);
        // $this->call(UsersTableSeeder::class);
    }
}
