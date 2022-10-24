<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('mantapjiwa00')
        ]);

        \App\Models\CongregationStatus::create([
            'congregation_status' => 'Dewasa'
        ]);
        \App\Models\CongregationStatus::create([
            'congregation_status' => 'Pemuda'
        ]);
        \App\Models\CongregationStatus::create([
            'congregation_status' => 'Remaja'
        ]);
        \App\Models\CongregationStatus::create([
            'congregation_status' => 'Anak-Anak'
        ]);
        \App\Models\CongregationStatus::create([
            'congregation_status' => 'Balita'
        ]);


        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Ayah'
        // ]);
        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Ibu'
        // ]);
        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Anak'
        // ]);
        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Suami'
        // ]);
        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Istri'
        // ]);
        // \App\Models\FamilyStatus::create([
        //     'family_status' => 'Single'
        // ]);

    }
}
