<?php

namespace Database\Seeders;

use App\Models\v2\Breed;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breed::create([ 'name' => 'Shi-tzu', 'type' => 0]);
        Breed::create([ 'name' => 'Pug', 'type' => 0]);
        Breed::create([ 'name' => 'Siames', 'type' => 1]);
        Breed::create([ 'name' => 'Persa', 'type' => 1]);
        Breed::create([ 'name' => 'Birmanês', 'type' => 1]);
        Breed::create([ 'name' => 'Papagaio-galego', 'type' => 2]);
    }
}
