<?php

use App\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new Patient([
            'first_name' => 'Max',
            'name' => 'Mustermann',
            'clinic_id' => 38519,
            'gender' => 'm',
            'date_of_birth' => Carbon::now()->subYears(60)->toDateString(),
            'comment' => 'Das ist ein Kommentarfeld',
            'address' => 'Ostanlage 45 35390 Giessen',
            'phone' => '064112345',
            'mobile' => '015012345678',
            'mail' => 'max.mustermann@ges.thm.de',
            'room' => 102,
            'health_insurance_number' => 'A123456780',
            'ward_id' => 1,
            'general_practitioner_id' => 1,
            'health_insurance_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $patient->save();

        $patient->audits()->find(1)->update([
            'user_type' => 'App\Patient',
            'user_id' => 1
        ]);

        $patient = new Patient([
            'first_name' => 'Hans',
            'name' => 'Wurst',
            'clinic_id' => 38520,
            'gender' => 'm',
            'date_of_birth' => Carbon::now()->subYears(60)->toDateString(),
            'comment' => 'Das ist ein Kommentarfeld',
            'address' => 'Ostanlage 45 35390 Giessen',
            'phone' => '064112345',
            'mobile' => '015012345678',
            'mail' => 'hans.wurst@ges.thm.de',
            'room' => 102,
            'health_insurance_number' => 'A123456781',
            'ward_id' => 1,
            'general_practitioner_id' => 1,
            'health_insurance_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $patient->save();
        $patient->audits()->find(2)->update([
            'user_type' => 'App\Patient',
            'user_id' => 1
        ]);

        $patient = new Patient([
            'first_name' => 'Mister',
            'name' => 'X',
            'clinic_id' => 38520,
            'gender' => 'm',
            'date_of_birth' => Carbon::now()->subYears(60)->toDateString(),
            'comment' => 'Das ist ein Kommentarfeld',
            'address' => 'Ostanlage 45 35390 Giessen',
            'phone' => '064112345',
            'mobile' => '015012345678',
            'mail' => 'mister.x@ges.thm.de',
            'room' => 202,
            'health_insurance_number' => 'D123456781',
            'ward_id' => 2,
            'general_practitioner_id' => 1,
            'health_insurance_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $patient->save();
        $patient->audits()->find(3)->update([
            'user_type' => 'App\Patient',
            'user_id' => 1
        ]);


    }
}
