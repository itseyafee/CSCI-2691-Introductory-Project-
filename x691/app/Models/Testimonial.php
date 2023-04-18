<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = 'testimonials';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    
}
