<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    //You can use this
    protected $fillable = ['title', 'body'];
    //OR this
    // protected $guarded = [];

    use SoftDeletes;

    public function scopeAhmed($query)
    {
        return $query->where('body', 'searched body');
    }
}
