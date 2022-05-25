<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    public function abilityScores() {
        return $this->hasMany('App\AbilityScore', 'reference', 'index');
    }
    
}
