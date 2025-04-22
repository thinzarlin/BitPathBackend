<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanRequest extends Model
{
    protected $fillable = [
        'user_id', 
        'roadmap_id',
        'type',
        'duration',
        'days'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roadmap()
    {
        return $this->belongsTo(Roadmap::class);
    }
}
