<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsDriveLine extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_drive_line';
    protected $primaryKey = 'uid';
}
