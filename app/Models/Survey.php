<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Survey extends Pivot
{
    use HasFactory;
    protected $table = 'surveys';
    protected $fillable = [
      'food_id',
      'pet_id',
      'user'
    ];
    public $incrementing = true;
}
