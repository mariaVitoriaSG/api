<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    protected $table = "locale";
    protected $fillable = [
        'street',
        'neighborhood',
        'number',
        'zip code',
        'city',
        'state',
        'country',
    ];
}