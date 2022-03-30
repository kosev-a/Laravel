<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() //отображает все новости
    {
        $news = $this->getNews();

        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id) //отображает одну конкретную новость
    {
        return view('news.show', [
            'news' => $this->getNews($id)
        ]);
    }

    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        file_put_contents(__DIR__ . '/file.txt', json_encode($_POST));

        // для тестирования
        return response()->json(
            $request->only('name', 'telephone', 'email'), 201
        );
    }
}
