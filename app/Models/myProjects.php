<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myProjects extends Model
{
    use HasFactory;

    protected $table = 'myprojects'; 

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'budget',
    ];

}

