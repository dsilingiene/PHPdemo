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

        \App\Radar::create([
            'date' => Carbon::create(2010, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 500,
            'time' => 30
        ]);
        \App\Radar::create([
            'date' => Carbon::create(2013, 1, 2, 0, 1, 59),
            'number' => 'AAA111',
            'distance' => 25,
            'time' => 5
        ]);
        \App\Radar::create([
            'date' => Carbon::create(2013, 1, 2, 0, 1, 59),
            'number' => 'KJL100',
            'distance' => 200,
            'time' => 40
        ]);
        \App\Radar::create([
            'date' => Carbon::create(2013, 1, 2, 0, 1, 59),
            'number' => 'POL002',
            'distance' => 250,
            'time' => 50
        ]);
        \App\Radar::create([
            'date' => Carbon::create(2017, 1, 2, 0, 3, 59),
            'number' => 'CNL500',
            'distance' => 10,
            'time' => 5
        ]);
        
        \App\Driver::create([
            'name' => 'Jonas',
            'city' => 'Vilnius'
        ]);
        \App\Driver::create([
            'name' => 'Rima',
            'city' => 'Kaunas'
        ]);
        \App\Driver::create([
            'name' => 'Romas',
            'city' => 'Balbieriškis'
        ]);
        $radarsDistance = [5000, 4500, 5100];
        
        $raide = 'ABCDEFGHIJKLMNOPRSTUVZ';
        $sk = strlen($raide) - 1;

        $timeFrom = Carbon::create(2017, 1, 1, 0, 0, 0)->timestamp;
        $timeTo = Carbon::now()->timestamp;

        for ($i = 0; $i < 1000; $i++) {
            
            $distance = $radarsDistance[ rand(0, 2)];
            $speed = rand(120, 190);
            $time = round($distance / ($speed / 3.6));  

            $timestamp = rand($timeFrom, $timeTo);

            $number = $raide[rand(0, $sk)] . $raide[rand(0, $sk)] . $raide[rand(0, $sk)] .
                rand(0, 9) . rand(0, 9) . rand(0, 9);

            $radar = new \App\Radar();
            $radar->date = Carbon::createFromTimestamp($timestamp);
            $radar->number = $number;
            $radar->distance = $distance;
            $radar->time = $time;
            
            $radar->save();
    
    
        // $this->call(UsersTableSeeder::class);
    
        }
    }
}