<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
         'category_id','subcategory_id','title',
         'description','budget','project_type',
         'duration'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');

    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'category_id','id');
    }

    public function bid(){
        return $this->hasMany(Bid::class);
    }
   
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}