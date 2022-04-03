<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $dates = ['published_at']; //simulamos el q sea instancia de 'carbon', los campos por defecto created_at y modified_At ya lo son

    public function category(){ 
        return $this->belongsTo(Category::class);
    }
    public function tags(){ 
        return $this->belongsToMany(Tag::class);
    }
}
