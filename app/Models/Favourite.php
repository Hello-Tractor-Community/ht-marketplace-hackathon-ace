<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favourite extends Model
{
    public function vehicle():BelongsTo{
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }
}
