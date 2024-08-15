<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'has_child',
        'children',
        'disabled',
    ];

    protected $casts = [
        'children' => 'array',
    ];
}
