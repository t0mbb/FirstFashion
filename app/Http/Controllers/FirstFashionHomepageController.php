<?php

namespace App\Http\Controllers;

use App\Repository\HomepageRepos;
use App\Repository\ShirtRepos;
use Illuminate\Http\Request;

class FirstFashionHomepageController extends Controller
{
    public function homepage(){
//        $categories = CategoryRepos::getAllCategories();
        $categories = HomepageRepos::getAllCategories();
        $shirt = ShirtRepos::getAllShirt();
        return view('FirstFashion.homepage',
            [
                'categories' => $categories,
                'shirt' => $shirt
            ]);
    }
}
