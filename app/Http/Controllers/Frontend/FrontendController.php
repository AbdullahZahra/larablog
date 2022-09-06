<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $all_categories = Category::where('status', '0')->get();
        return view('frontend.index', compact('all_categories'));
    }

    public function viewCategoryPost($category_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();

        if (!$category) {
            return redirect('/');
        }

        $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(10);
        return view('frontend.post.index', compact('post', 'category'));
    }

    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();

        if (!$category) {
            return redirect('/');
        }

        $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', '0')->first();
        $latest_posts = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get()->take(15);
        return view('frontend.post.view', compact('post', 'latest_posts'));
    }
}
