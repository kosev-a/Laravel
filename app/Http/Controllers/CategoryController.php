<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() //отображает все категории
    {
        return view('categories.index', [
            'categories' => Category::withCount('news')->paginate(5)
        ]);
    }

    public function show(Category $category) //отображает новости одной категории
    {   
        $newsList = DB::table('categories')
            ->join('news', 'categories.id', '=', 'news.category_id')
            ->where('news.category_id', '=', 'category.id')
            ->get();
        return view('categories.show', [
            'newsList' => $newsList
        ]);
    }
}
