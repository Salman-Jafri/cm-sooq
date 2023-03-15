<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsOrigin extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_origin';
    protected $primaryKey = 'uid';
}
