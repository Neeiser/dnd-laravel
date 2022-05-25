<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilityScore extends Model
{
    public function proficency() {
        return $this->belongsTo('App\Proficency', 'reference', 'index');
    }
}
