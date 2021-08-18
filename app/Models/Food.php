<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    public function pets()
    {
        return $this->belongsToMany(Pet::class)
            ->using(Survey::class)
            ->withPivot('user');
    }
}
