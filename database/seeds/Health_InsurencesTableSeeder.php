<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Health_InsurencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('health__insurances')->insert([
            'id' => 1,
            'health_insurence_name' => 'AOK Hessen',
            'address' => 'Basler Straße 2 61352 Bad Homburg',
            'phone' => '+498000000255',
            'mail' => 'service@he.aok.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('health__insurances')->insert([
            'id' => 2,
            'health_insurence_name' => 'BAHN-BKK',
            'address' => 'Franklinstraße 54 60486 Frankfurt',
            'phone' => '+4969770780',
            'mail' => 'service@bahn-bkk.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('health__insurances')->insert([
            'id' => 3,
            'health_insurence_name' => 'Techniker Krankenkasse',
            'address' => 'Bramfelder Strasse 140 22305 Hamburg',
            'phone' => '08002858585',
            'mail' => 'service@tk.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
