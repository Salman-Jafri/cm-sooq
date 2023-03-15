<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPasswordHistory extends Model
{
    use HasFactory;
    protected $table = 'ac_reset_password_history';
    protected $primaryKey = 'uid';
}
