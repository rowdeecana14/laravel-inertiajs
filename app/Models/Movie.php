<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Movie extends Model
{
    use HasFactory;
    protected $casts = [
        'title' => 'string',
        'summary' => 'string',
        'release_at' => 'date',
    ];

    protected $fillable = [
        'title',
        'summary',
        'release_at'
    ];
}
