<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortCode extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'autonumber',
        'shortcode',
        'text',
    ];

}
