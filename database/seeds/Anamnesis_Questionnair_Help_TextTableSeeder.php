<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Anamnesis_Questionnair_Help_TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Anamnesis_Questionnair_Help_Text')->insert([
            'id' => 1,
            'recent_anamnesis' => 'Schmerzcharakteristik: \r\n Qualität \r\n Lokalisation \r\n Ausstrahlung \r\n Größe und Verteilung \r\n Schmerzintensität Schmerzdauer \r\n Erstes Auftreten \r\n Häufigkeit der Schmerzen \r\n Rhythmik \r\n Auslösende oder verstärkende Faktoren \r\n Erleichternde Faktoren \r\n Assoziierte Symptome \r\n Vorangegangene Ereignisse (Mahlzeiten, Auslandsaufenthalte, Stress, Sportliche Betätigung)',
            'previous_anamnesis' => 'Kinderkrankheiten \r\n Krankenhausaufenthalte \r\n Operationen \r\n Rehabilitationsmaßnahmen \r\n Unfälle \r\n Chronische Erkrankungen der Organsysteme',
            'vegetative_anamnesis' => 'Appetit \r\n Durst \r\n Defäkation \r\n Miktion und Nykturie \r\n Husten \r\n Ein- bzw. Durchschlafstörungen \r\n B-Symptomatik (Fieber, Nachtschweiß, Gewichtsverlust)',
            'risk_anamnesis' => 'Risiken \r\n Unverträglichkeiten \r\n Allergien',
            'drug_anamnesis' => 'Medikamente: \r\n Dauer, Dosierung, Grund \r\n Suchtmittel \r\n Nikotin, Alkohol, Drogen',
            'gender_anamnesis' => 'Frauen: \r\n Schwangerschaften, Regelblutung, Libido, Brustschmerzen oder -veränderung \r\n Männer: \r\n Potenzstörung, Miktionsstörung, Libido, Kinderlosigkeit',
            'family_anamnesis' => 'Erbkrankheiten: \r\n  Todesursache der Eltern oder Geschwister, Ähnliche Symptomatik im Verwandtenkreis',
            'social_anamnesis' => 'Beruf: \r\n Berentet, Arbeitslosigkeit, Arbeitsort \r\n Beziehungsstatus: \r\n  Scheidung, Trennung, allein stehend \r\n Wohnort: Einrichtung \r\n Staatsangehörigkeit \r\n Religion',
            'further_anamnesis' => 'Ernährungszustand: \r\n Körpergewicht, BMI \r\n Allgemeinzustand: \r\n Belastbarkeit und Leistungsfähigkeit',
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
