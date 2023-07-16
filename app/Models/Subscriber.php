<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    public function tier()
    {
        return $this->hasOne(Tier::class, 'id', 'tier_id');
    }
}
