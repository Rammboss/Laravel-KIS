<?php

namespace Tests\Feature;

use App\Anamnesis;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnamnesisTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $anamnesis = new Anamnesis([
            'patient_id' => 1,
            'recent_anamnesis' => 'Schmerzcharakteristik: ' . "\n" . 'Qualität ' . "\n" . ' Lokalisation ' . "\n" . ' Ausstrahlung ' . "\n" . ' Größe und Verteilung ' . "\n" . ' Schmerzintensität Schmerzdauer ' . "\n" . ' Erstes Auftreten ' . "\n" . ' Häufigkeit der Schmerzen ' . "\n" . ' Rhythmik ' . "\n" . ' Auslösende oder verstärkende Faktoren ' . "\n" . ' Erleichternde Faktoren ' . "\n" . ' Assoziierte Symptome ' . "\n" . ' Vorangegangene Ereignisse (Mahlzeiten, Auslandsaufenthalte, Stress, Sportliche Betätigung)',
            'previous_anamnesis' => 'Kinderkrankheiten ' . "\n" . ' Krankenhausaufenthalte ' . "\n" . ' Operationen ' . "\n" . ' Rehabilitationsmaßnahmen ' . "\n" . ' Unfälle ' . "\n" . ' Chronische Erkrankungen der Organsysteme',
            'vegetative_anamnesis' => 'Appetit ' . "\n" . ' Durst ' . "\n" . ' Defäkation ' . "\n" . ' Miktion und Nykturie ' . "\n" . ' Husten ' . "\n" . ' Ein- bzw. Durchschlafstörungen ' . "\n" . ' B-Symptomatik (Fieber, Nachtschweiß, Gewichtsverlust)',
            'risk_anamnesis' => 'Risiken ' . "\n" . ' Unverträglichkeiten ' . "\n" . ' Allergien',
            'drug_anamnesis' => 'Medikamente: ' . "\n" . ' Dauer, Dosierung, Grund ' . "\n" . ' Suchtmittel ' . "\n" . ' Nikotin, Alkohol, Drogen',
            'gender_based_anamnesis' => 'Frauen: ' . "\n" . ' Schwangerschaften, Regelblutung, Libido, Brustschmerzen oder -veränderung ' . "\n" . ' Männer: ' . "\n" . ' Potenzstörung, Miktionsstörung, Libido, Kinderlosigkeit',
            'family_anamnesis' => 'Erbkrankheiten: ' . "\n" . '  Todesursache der Eltern oder Geschwister, Ähnliche Symptomatik im Verwandtenkreis',
            'social_anamnesis' => 'Beruf: ' . "\n" . ' Berentet, Arbeitslosigkeit, Arbeitsort ' . "\n" . ' Beziehungsstatus: ' . "\n" . '  Scheidung, Trennung, allein stehend ' . "\n" . ' Wohnort: Einrichtung ' . "\n" . ' Staatsangehörigkeit ' . "\n" . ' Religion',
            'further_anamnesis' => 'Ernährungszustand: ' . "\n" . ' Körpergewicht, BMI ' . "\n" . ' Allgemeinzustand: ' . "\n" . ' Belastbarkeit und Leistungsfähigkeit',
            'suspected_diagnosis' => 'COPD',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $this->assertTrue(isset($anamnesis->patient_id));
        $this->assertTrue(isset($anamnesis->recent_anamnesis));
        $this->assertTrue(isset($anamnesis->previous_anamnesis));
        $this->assertTrue(isset($anamnesis->vegetative_anamnesis));
        $this->assertTrue(isset($anamnesis->risk_anamnesis));
        $this->assertTrue(isset($anamnesis->drug_anamnesis));
        $this->assertTrue(isset($anamnesis->gender_based_anamnesis));
        $this->assertTrue(isset($anamnesis->family_anamnesis));
        $this->assertTrue(isset($anamnesis->social_anamnesis));
        $this->assertTrue(isset($anamnesis->further_anamnesis));
        $this->assertTrue(isset($anamnesis->suspected_diagnosis));
        $this->assertTrue(isset($anamnesis->created_at));
        $this->assertTrue(isset($anamnesis->updated_at));
    }
}
