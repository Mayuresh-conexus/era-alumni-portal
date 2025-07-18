<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

     protected $fillable = [
        'sponsor_name',
        'email',
        'phone',
        'featured_image',
        'company_name',
    ];

}
