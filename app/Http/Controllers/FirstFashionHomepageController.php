<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
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

    public function getCategories($cat_id){
        $catname = CategoryRepos::getCatNameById($cat_id);
        $caregories = CategoryRepos::getAllCategories();
        $ShirtbyCat = HomepageRepos::getShirtbyCatId($cat_id);
        return view('FirstFashion.homepage.ShirtbyCat',
            [
                'categories' => $caregories,
                'ShirtbyCat' => $ShirtbyCat,
                'catname' => $catname
            ]);
    }

    public function allShirt(){
        $categories = CategoryRepos::getAllCategories();
        $shirt = ShirtRepos::getAllShirt();
        return view('FirstFashion.homepage.allShirt',
            [
                'categories' => $categories,
                'shirt' => $shirt
            ]);
    }
    public function detailShirt($shirt_id){
        $category = HomepageRepos::getAllCategories();
        $shirt = ShirtRepos::getShirtById($shirt_id);
        return view('FirstFashion.homepage.detailShirt',
            [
                'category' => $category,
                'uniform' => $shirt[0]
            ]
        );
    }
    public function search(Request $request){
        $categories = HomepageRepos::getAllCategories();
        $search = (object)[
            'search' => $request->input('search'),
        ] ;

        $resultSearch = HomepageRepos::resultSearch($search);

        return view('FirstFashion.homepage.search',
            [
                'resultSearch' => $resultSearch,
                'categories' => $categories

            ]);

    }
}
