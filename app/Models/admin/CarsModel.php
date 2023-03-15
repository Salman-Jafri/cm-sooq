<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_model';
    protected $primaryKey = 'uid';
}
