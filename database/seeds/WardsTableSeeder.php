<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wards')->insert([
            'id' => 1,
            'ward_name' => 'Notaufnahme',
            'phone_extension' => '06410001',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('wards')->insert([
            'id' => 2,
            'ward_name' => 'Radiologie',
            'phone_extension' => '06410002',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('wards')->insert([
            'id' => 3,
            'ward_name' => 'Neurologie',
            'phone_extension' => '06410003',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('wards')->insert([
            'id' => 4,
            'ward_name' => 'Kardiologie',
            'phone_extension' => '06410004',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('wards')->insert([
            'id' => 5,
            'ward_name' => 'Gasteroentorologie',
            'phone_extension' => '06410005',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('wards')->insert([
            'id' => 6,
            'ward_name' => 'Pneumologie',
            'phone_extension' => '06410006',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
