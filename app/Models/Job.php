<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Job extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeOnline($query){
        return $query->where('status', 1);
    }
    public function likes(){
        return $this->belongsToMany(User::class);
    }

    public function isLiked(){
        if(auth()->check()){
            return auth()->user()->likes->contains('id', $this->id);
        }
    }

}
