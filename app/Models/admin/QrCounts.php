<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrCounts extends Model
{
    use HasFactory;
    protected $table = 'ac_qr_counts';
    protected $primaryKey = 'uid';
}
