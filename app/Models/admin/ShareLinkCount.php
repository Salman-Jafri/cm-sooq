<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareLinkCount extends Model
{
    use HasFactory;
    protected $table = 'ac_share_link_count';
    protected $primaryKey = 'uid';
}
