<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminBarRequest;
use App\Mail\OrderShipped;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail($id, Request $req )
    {
        $Post = Post::find($id);
        $Post->comment;
        Mail::to('denigan2016@bk.ru')->send(new OrderShipped ($req->validate(['comment'])));
        return 'ok';
    }
}
