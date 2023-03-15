<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowCount extends Model
{
    use HasFactory;
    protected $table = 'ac_follow_count';
    protected $primaryKey = 'uid';
}
