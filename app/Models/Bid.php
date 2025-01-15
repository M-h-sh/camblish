<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
       'project_id','user_id',
       'bid_amount','description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
            }

            
   /* public fuction project(){
        return $this->belongsTo(Project:class);
    }*/
}
