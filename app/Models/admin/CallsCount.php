<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallsCount extends Model
{
    use HasFactory;
    protected $table = 'ac_calls_count';
    protected $primaryKey = 'uid';
}
