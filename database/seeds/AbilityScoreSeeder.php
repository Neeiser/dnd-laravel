<?php

use Illuminate\Database\Seeder;
use App\AbilityScore;

class AbilityScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abilityScoresList = config('abilityScores');

        foreach ($abilityScoresList as $item) {
            if (isset($item->full_name)) {
                $newName = $item->full_name;
            } else {
                $newName = $item->name;
            }
            AbilityScore::create([
                'index'     => $item->index,
                'name'      => $item->name,
                'full_name' => $newName,
                'desc'      => $item->desc,
            ]);
        }
    }
}
