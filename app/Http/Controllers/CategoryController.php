<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() //отображает все категории
    {
        $categories = $this->getCategories();

        return view('categories.index', [
            'categoriesList' => $categories
        ]);
    }

    public function show(int $categoryId) //отображает новости одной категории
    {
        return view('categories.show', [
            'newsList' => $this->getNewsByCategory($categoryId)
        ]);
    }
}
