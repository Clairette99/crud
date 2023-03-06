<?php

namespace Database\Factories;

use App\Models\Personnel;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonnelFactory extends Factory
{
    
    protected $model = Personnel::class;

    
    
    public function definition() 
    {
        return [
            'nom' => $this->fake()->lastName(),
            'prenom' => $this->fake()->unique()->firstName(),
            'tache_id' => rand(1,7)
            
        ];
    }
}
