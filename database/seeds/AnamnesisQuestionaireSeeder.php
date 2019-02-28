<?php

use App\Anamnesis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AnamnesisQuestionaireSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

        $anamnesis->save();

        $anamnesis->audits()->find(4)->update([
            'user_type' => 'App\Anamnesis',
            'user_id' => 1
        ]);
    }

}
