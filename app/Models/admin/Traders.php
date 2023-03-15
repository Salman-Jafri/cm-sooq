<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traders extends Model
{
    use HasFactory;
    protected $table = 'ac_traders';
    protected $primaryKey = 'uid';
}
