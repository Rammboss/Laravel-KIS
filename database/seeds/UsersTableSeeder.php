<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([

            'username' => 'aast1',
            'title' => 'Dr',
            'first_name' => 'Andrea',
            'name' => 'Schmidt',
            'phone' => '0641256781',
            'mobile' => '017657951328',
            'mail' => 'andrea.schmidt@clinic.de',
            'password' => bcrypt('test'),
            'gender' => 'f',
            'ward_id' => 1,
            'specification_id' => 1,
            'role_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $user->save();

        $user = new \App\User([

            'username' => 'Admin',
            'title' => '',
            'first_name' => 'Christopher',
            'name' => 'Robin',
            'phone' => '0641256781',
            'mobile' => '017657951328',
            'mail' => 'christopher.robin@clinic.de',
            'password' => bcrypt('test'),
            'gender' => 'm',
            'ward_id' => 1,
            'specification_id' => 7,
            'role_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()

        ]);

        $user->save();
    }
}
