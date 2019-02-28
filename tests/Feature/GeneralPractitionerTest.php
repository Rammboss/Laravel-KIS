<?php

namespace Tests\Feature;

use App\General_Practitioner;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GeneralPractitionerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $general_practitioner = new General_Practitioner([
            'general_practitioner_name' => 'Dr. Klaus Witt',
            'address' => 'Hauptstrasse 1, 35390 Gießen',
            'phone' => '06418254712',
            'mobile' => '017052046294',
            'mail' => 'info@kwitt.de',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $this->assertTrue(isset($general_practitioner->general_practitioner_name));
        $this->assertTrue(isset($general_practitioner->address));
        $this->assertTrue(isset($general_practitioner->phone));
        $this->assertTrue(isset($general_practitioner->mobile));
        $this->assertTrue(isset($general_practitioner->mail));
        $this->assertTrue(isset($general_practitioner->created_at));
        $this->assertTrue(isset($general_practitioner->updated_at));
    }
}
