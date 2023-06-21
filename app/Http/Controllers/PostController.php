<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    //this call route binding 
    //dia binding dengan object type with parameter di web.php
    //post1 will go to post.blade.php
    //$post1 go to web.php because want to check the id with the post_text data
    public function show(Post $post1){


        // return view (view:'post', compact(var_name:'post'));
        return view ('post', compact('post1'));
    }
}
