<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RadarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'name' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'naty' => 'AAA001',
            ]);
        DB::table('drivers')->insert([
            'date' => Carbon::create(2016, 1, 2, 23, 22, 10),
            'number' => 'BBB001',
            'distance' => 8,
            'time'=> 8,
            ]);
        DB::table('radars')->insert([
            'date' => Carbon::create(2010, 6, 22, 10, 05, 20),
            'number' => 'ADS801',
            'distance' => 6,
            'time'=> 2,
            ]);  
        DB::table('radars')->insert([
            'date' => Carbon::create(2010, 6, 22, 10, 05, 20),
            'number' => 'ADS801',
            'distance' => 6,
            'time'=> 2,
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
            
        }
    
    }
}
