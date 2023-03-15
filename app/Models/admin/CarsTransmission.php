<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsTransmission extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_transmission';
    protected $primaryKey = 'uid';
}
