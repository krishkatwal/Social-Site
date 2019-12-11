<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage(){
        $imagePath=($this->image) ? $this->image:'/uploads/vHG56uElaZyIQZaJ5zTiBjj7oAQneWuTgouWPzcm.webp';
        return '/storage/'.$imagePath;
    }
   public function user(){
       return $this->belongsTo(User::class);
   }
   public function followers()
   {
       return $this->belongsToMany(User::class);
   }
}
