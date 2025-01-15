<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // use HasFactory;

    protected $fillable = [
        'project_id',
        'reviewer_id',
        'review',
        'rating',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
    
}
