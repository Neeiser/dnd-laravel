<?php

use Illuminate\Database\Seeder;
use App\Proficiency;

class ProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proficiencyList = config('proficiencies');

        foreach ($proficiencyList as $item) {
            Proficiency::create([
                'index'         => $item->index,
                'name'          => $item->name,
                'type'          => $item->type,
                'reference'     => $item->reference,
            ]);
        }
    }
}
