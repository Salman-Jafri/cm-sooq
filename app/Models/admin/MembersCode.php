<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersCode extends Model
{
    use HasFactory;
    protected $table = 'ac_members_code';
    protected $primaryKey = 'uid';
}
