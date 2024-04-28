<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'make',
        'model',
        'year',
        'price',
        'description',
        'is_featured',
        'manufacture_date',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'manufacture_date' => 'date',
    ];
}
