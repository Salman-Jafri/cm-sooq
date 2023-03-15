<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchCount extends Model
{
    use HasFactory;
    protected $table = 'ac_watch_count';
    protected $primaryKey = 'uid';
}
