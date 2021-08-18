<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pets';
    public function foods()
    {
        return $this->belongsToMany(Food::class)
            ->using(Survey::class)
            ->withPivot('user');
    }
}
