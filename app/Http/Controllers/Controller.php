<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     private static $categories = [
//         1 => [
//             'id' => 1,
//             'title' => 'Спорт',
//             'category' => 'sport'
//         ],
//         2 => [
//             'id' => 2,
//             'title' => 'Культура',
//             'category' => 'culture'
//         ],
//         3 => [
//             'id' => 3,
//             'title' => 'Политика',
//             'category' => 'politics'
//         ],
//         4 => [
//             'id' => 4,
//             'title' => 'Бизнес',
//             'category' => 'business'
//         ],
//         5 => [
//             'id' => 5,
//             'title' => 'Другие новости',
//             'category' => 'other'
//         ]
//     ];

//     public static function getNews(?int $id = null): array
//     {
//         $faker = Factory::create();
//         $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];

//         if($id) {
//             return [
//                 'id'     => $id,
//                 'title'  => $faker->jobTitle(),
//                 'author' => $faker->userName(),
//                 'image'  => $faker->imageUrl(250, 170),
//                 'status' => $statusList[mt_rand(0, 2)],
//                 'description' => $faker->text(100),
//                 'categoryId' => mt_rand(1, 5)
//             ];
//         }

//         $data = [];
//         for ($i=0; $i < 20; $i++) {
//             $id = $i + 1;
//             $data[] = [
//                 'id'     => $id,
//                 'title'  => $faker->jobTitle(),
//                 'author' => $faker->userName(),
//                 'image'  => $faker->imageUrl(250, 170),
//                 'status' => $statusList[mt_rand(0, 2)],
//                 'description' => $faker->text(100),
//                 'categoryId' => mt_rand(1, 5)
//             ];
//         }

//         return $data;
//     }


//     public function getCategories(): array 
//     {
//         return static::$categories;
//     }

//     public function getCategoryTitleById(int $id): string
//     {
//         foreach (static::$categories as $category) {
//             if ($category['id'] == $id) {
//                 $title = $category['title'];
//             }
//         }
//         return $title;
//     }

//     public function getNewsByCategory(int $categoryId): array
//     {
//         $data = [];
//         foreach (static::getNews() as $news) {
//             if ($news['categoryId'] == $categoryId) {
//                 $data[] = $news;
//             }
//         }
//         return $data;
//     }
}
