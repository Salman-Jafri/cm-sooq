<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsFuelType extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_fuel_type';
    protected $primaryKey = 'uid';
}
