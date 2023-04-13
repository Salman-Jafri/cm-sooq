<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Following extends Model
{
    use HasFactory;
    protected $table = 'ac_following';
    protected $primaryKey = 'uid';

    public function memberFollower()
    {
        return $this->belongsTo(Member::class,"member_id","uid");
    }

    public function memberFollowing()
    {
        return $this->belongsTo(Member::class,"following_id","uid");
    }
}
