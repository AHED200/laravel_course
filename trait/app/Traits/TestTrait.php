<?php

namespace App\Traits;

use App\Models\User;

trait TestTrait
{
    public function getData($model)
    {
        return $model::all();
    }

    public function scopeName($query)
    {
        return $query->where('name', 'Mrs. Electa Wolff Jr.');
    }
}
