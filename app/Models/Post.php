<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','active', 'image', 'content', 'user_id'];
    
    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
