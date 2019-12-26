<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'position', 'quote', 'image',
    ];
}
