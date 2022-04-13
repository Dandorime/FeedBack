<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function Submit(PostRequest $req)
    {
        $Post= new Post();
        
        $Post->name=$req->input('name');
        $Post->email=$req->input('email');
        $Post->message=$req->input('message');

        $Post->save();  
        
       return redirect(route('feedback'));
    } 
    
}
