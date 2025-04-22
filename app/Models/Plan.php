<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'roadmap_id',
        'is_finished',
        'total_tasks',
        'completed_tasks'
    ];

    public function roadmap()
    {
        return $this->belongsTo(Roadmap::class);
    }

    public function planParticipants()
    {
        return $this->hasMany(PlanParticipant::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
