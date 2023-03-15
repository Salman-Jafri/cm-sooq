<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsOdometer extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_odometer';
    protected $primaryKey = 'uid';
}
