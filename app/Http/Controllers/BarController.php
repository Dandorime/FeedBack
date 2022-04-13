<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarController extends Controller
{
    public function index()
    {
        $users = Post::all();
        return view('admin', compact('users'));

    }
}
