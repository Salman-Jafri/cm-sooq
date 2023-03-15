<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersCategory extends Model
{
    use HasFactory;
    protected $table = 'ac_members_category';
    protected $primaryKey = 'uid';
}
