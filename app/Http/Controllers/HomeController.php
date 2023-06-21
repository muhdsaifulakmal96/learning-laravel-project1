<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    //function for home page/index page
    public function index()
    {   
        //contoh how its work if using array 
        //$allCategories = ['Category 1', 'Category 2'];

        //this example if we are not use model 
        //'categories here is the name os table inside database"
        // $allCategories = DB::table(table: 'categories')-> get();

        // []=data will pass inside the array 
        //'categories' is where the variable will pass at index.blede.php

        //if use model then 
        //from category model where the data is get from database
        //put at allcategories
        //make function return view at index.blade.php
        //use method as 'categories'
        // $allCategories = Category::all();
        //Category::all(); (Category) is from model 
        $categories = Category::all();

        //can use this syntax or
        // return view('index', ['categories'=> $allCategories]);
        //orange Post is from model
        $posts = Post::when(request('category_id'), function($query) {
            $query ->where('category_id',request('category_id'));
        })
        //latest() and get() is common method to retrieve data
        //latest is to get last data/records to ensure latest data appear first
        //to retreive all data/records
        ->latest()
        ->get();

        //can also use this 
        // return view('index', [
        //     'categories'=> $allCategories,
        //     'posts' => $posts
        // ]);
        
        //or
        //can compact the categories and post so that no 'categories' => $allcategories
        //this categories and posts is from $categories and $posts so that this will go into index.blade.php
        //to understand: return view(view: 'index', compact(var_name:'categories',var_name: 'posts'));
        return view('index', compact('categories','posts'));
        

    }
}
