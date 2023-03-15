<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsInteriorColor extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_interior_color';
    protected $primaryKey = 'uid';
}
