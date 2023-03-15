<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareWaCount extends Model
{
    use HasFactory;
    protected $table = 'ac_share_wa_count';
    protected $primaryKey = 'uid';
}
