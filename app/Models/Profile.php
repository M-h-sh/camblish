<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
         'user_id', 'headline', 'description', 
        'skills', 'portfolio', 'certification', 
        'education', 'experience'
    ];
    public function user(){
        return $this->belongsTo(User::class);
        
    }

}
