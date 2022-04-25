<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\HomepageRepos;
use App\Repository\ShirtRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function gallery(){
        $categories = CategoryRepos::getAllCategories();
        $shirt = ShirtRepos::getAllShirt();
        $shirt1 = ShirtRepos::getShirtCoat();
        $polo2 = ShirtRepos::getShirtPolo();
        $sweater3=ShirtRepos::getShirtSweater();
        $tshirt4=ShirtRepos::getShirtTshirt();
        return view('FirstFashion.homepage.gallery',
        [
            'shirt' => $shirt,
            'categories'=> $categories,
            'shirt1'=> $shirt1,
            'polo2'=> $polo2,
            'sweater3' =>$sweater3,
            'tshirt4' =>$tshirt4
        ]);

    }
    public function download(){
            $download = public_path('docs/Document.doc');
            return response()->download($download);
    return view('FirstFashion.homepage.detailShirt');
    }

    public function detailShirt($shirt_id){
        $categories = HomepageRepos::getAllCategories();
        $shirt = ShirtRepos::getShirtById($shirt_id);
        return view('FirstFashion.homepage.detailShirt',
            [
                'categories' => $categories,
                'shirt' => $shirt
            ]
        );
    }
    public function mail ($shirt_id){
        $shirts = ShirtRepos::getShirtById($shirt_id);
        HomepageRepos::InsertMail($shirts);
        $categories = HomepageRepos::getAllCategories();
        $shirt = ShirtRepos::getShirtById($shirt_id);
        return view('FirstFashion.homepage.detailShirt',
            [
                'categories' => $categories,
                'shirt' => $shirt
            ]
        );
    }

    public function contactUs(){
        $categories = CategoryRepos::getAllCategories();
        return view('FirstFashion.homepage.contactUs',
            [
                'categories' => $categories
            ]);
    }

    public function search(Request $request){
        $categories = HomepageRepos::getAllCategories();
        $search = (object)[
            'search' => $request->input('search'),
        ];
        $resultSearch = HomepageRepos::resultSearch($search);
        return view('FirstFashion.homepage.search',
            [
                'resultSearch' => $resultSearch,
                'categories' => $categories
            ]);

    }

}
