<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminBarRequest;
use App\Http\Requests\SaveRequest;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class SaveController extends Controller
{
    public function Save($id, SaveRequest $req)
    {   
        
        
        $Post = Post::find($id);
        $Post->comment=$req->input('comment');
        $Post->status='resolved';
        $Post->save(); 

        Mail::to($Post->email)->send(new OrderShipped ($Post));
        return 'ok';

    }
   
}
