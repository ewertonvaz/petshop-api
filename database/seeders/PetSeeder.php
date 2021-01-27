<?php

namespace Database\Seeders;

use App\Models\v2\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pet::create([ 'name' => 'Pollyana', 'breed_id' => 1]);
        Pet::create([ 'name' => 'Nando', 'breed_id' => 1]);
        Pet::create([ 'name' => 'Estrela', 'breed_id' => 1]);
        Pet::create([ 'name' => 'Pucca', 'breed_id' => 2]);
        Pet::create([ 'name' => 'Dexter', 'breed_id' => 2]);
    }
}
