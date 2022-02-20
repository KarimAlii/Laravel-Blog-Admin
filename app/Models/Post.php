<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'discerption',
        'author',
        'user_id',
        'image'
];

// public function posts(){
//     return $this->hasMany(User::class,'name');
// }

}
