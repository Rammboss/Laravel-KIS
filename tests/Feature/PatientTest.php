<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;

use App\Patient;

class PatientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
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

        $this->assertTrue(isset($patient->first_name));
        $this->assertTrue(isset($patient->name));
        $this->assertTrue(isset($patient->comment));
        $this->assertTrue(isset($patient->address));
        $this->assertTrue(isset($patient->phone));
        $this->assertTrue(isset($patient->mobile));
        $this->assertTrue(isset($patient->mail));
    }
}
