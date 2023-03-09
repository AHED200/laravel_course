<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //You can use this
    protected $fillable = ['title', 'body'];
    //OR this
    // protected $guarded = [];
}
