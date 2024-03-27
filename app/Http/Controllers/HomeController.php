<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Product;
use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Product::latest()->paginate(4);

        //render view with posts
        return view('product.index', compact('product'));
    }
    public function show(string $id): View
    {
        //get post by ID
        $product = Product::findOrFail($id);

        //render view with post
        return view('porduct.index', compact('product'));
    }
}