<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory, Filterable;
    public $fillable = ['name', 'user_id', 'description_small', 'description', 'status', 'picture'];
    public function texts(){
        return $this->hasMany(BlogText::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
