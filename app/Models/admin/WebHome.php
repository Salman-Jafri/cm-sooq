<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebHome extends Model
{
    use HasFactory;
    protected $table = 'ac_web_home';
    protected $primaryKey = 'uid';
}
