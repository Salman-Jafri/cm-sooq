<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\WaMessages;
use Illuminate\Http\Request;

class WaMessageController extends Controller
{
    public function waMessage()
    {
        return view('admin/wa_message');
    }
}
