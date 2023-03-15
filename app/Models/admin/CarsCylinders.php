<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsCylinders extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_cylinders';
    protected $primaryKey = 'uid';
}
