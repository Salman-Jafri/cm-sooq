<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsExteriorColor extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_exterior_color';
    protected $primaryKey = 'uid';
}
