<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table("taches")->insert([
                ["libelle"=>"redige les rapports"],
                ["libelle"=>"donne des comptes rendu"],
                ["libelle"=>"organise des reunions"],
                ["libelle"=>"nettoyage"],
                ["libelle"=>"redaction des lettres"],
                ["libelle"=>"realisation du bilan"],
                ["libelle"=>"inventaire"],
            ]);
    }
}
