<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            SpecificationsTableSeeder::class,
            WardsTableSeeder::class,
            UsersTableSeeder::class,

            Health_InsurencesTableSeeder::class,
            General_PractitionersTableSeeder::class,
            PatientsTableSeeder::class,
            Anamnesis_Questionnair_Help_TextTableSeeder::class,

            AnamnesisQuestionaireSeeder::class
        ]);
    }
}
