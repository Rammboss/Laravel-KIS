<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class General_PractitionersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general__practitioners')->insert([
            'id' => 1,
            'general_practitioner_name' => 'Dr. Klaus Witt',
            'address' => 'Hauptstrasse 1, 35390 Gießen',
            'phone' => '06418254712',
            'mobile' => '017052046294',
            'mail' => 'info@kwitt.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('general__practitioners')->insert([
            'id' => 2,
            'general_practitioner_name' => 'Dr. Hans Meiser',
            'address' => 'Wiesenstraße 15, 35390 Gießen',
            'phone' => '06418254713',
            'mobile' => '017052046295',
            'mail' => 'info@hmeiser.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
