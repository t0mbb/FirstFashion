<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use App\Repository\ShirtRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirstFashionShirtController extends Controller
{
    public function index(){
        return view('FirstFashion.index');
    }
    public function shirt_manager()
    {
        $shirts = ShirtRepos::getAllShirtWithCategory();


            return view('FirstFashion.shirt.shirt_manager',
                [
                    'shirts' => $shirts,

                ]);
        }


    public function createShirt()
    {
        $categories = CategoryRepos::getAllCategories();
        return view(
            'FirstFashion.shirt.newShirt',
            ['shirt' => (object)[
                'shirt_id' => '',
                'shirt_name' => '',
                'shirt_image' => '',
                'cat_id' => '',
                'shirt_material' => '',
                'shirt_size' => '',
                'shirt_price' => '',
                'shirt_description' => '',
            ],
                "categories" => $categories
            ]);
    }

    public function storeShirt (Request $request)
    {
        $this->formValidateShirt($request)->validate(); //shortcut

        $shirts = (object)[
            'shirt_id' => $request->input('shirt_id'),
            'shirt_name' => $request->input('shirt_name'),
            'shirt_image' => $request->input('shirt_image'),
            'cat_id' => $request->input('cat_id'),
            'shirt_material' => $request->input('shirt_material'),
            'shirt_size' => $request->input('shirt_size'),
            'shirt_price' => $request->input('shirt_price'),
            'shirt_description' => $request->input('shirt_description'),

        ];

        if($request->hasFile('shirt_image')){
            $destination_path = 'public/images/shirt';
            $image = $request->file('shirt_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('shirt_image')->storeAs($destination_path, $image_name);

            $shirts->shirt_image = $image_name;
        }

        $newShirt = ShirtRepos::insertShirt($shirts);

        return redirect()
            ->action('FirstFashionShirtController@shirt_manager');
    }

    public function showShirt($shirt_id)
    {
        $catnames = ShirtRepos::GetCatNameSID($shirt_id);
        $categories = CategoryRepos::getCategoryByShirtId($shirt_id);
        $shirts = ShirtRepos::getShirtById($shirt_id); //this is always an array of objects
        return view('FirstFashion.shirt.showShirt',
            [
                'shirt' => $shirts[0],
                "categories" => $categories,//get the first element
                "catnames" => $catnames[0],
            ]
        );
    }

    public function editShirt($shirt_id)
    {
        $categories = CategoryRepos::getAllCategories();
        $shirts = ShirtRepos::getShirtById($shirt_id); //this is always an array


        return view(
            'FirstFashion.shirt.updateShirt',
            [
                'shirt' => $shirts[0],

                "categories" => $categories
            ]);
    }

    public function updateShirt(Request $request, $shirt_id)
    {
        if ($shirt_id != $request->input('shirt_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionShirtController@shirt_manager');
        }

        $this->formValidateShirt($request)->validate(); //shortcut

        $shirts = (object)[
            'shirt_id' => $request->input('shirt_id'),
            'shirt_name' => $request->input('shirt_name'),
            'shirt_image' => $request->input('shirt_image'),
            'cat_id' => $request->input('cat_id'),
            'shirt_material' => $request->input('shirt_material'),
            'shirt_size' => $request->input('shirt_size'),
            'shirt_price' => $request->input('shirt_price'),
            'shirt_description' => $request->input('shirt_description'),

        ];

        if($request->hasFile('shirt_image')){
            $destination_path = 'public/images/shirt';
            $image = $request->file('shirt_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('shirt_image')->storeAs($destination_path, $image_name);

            $shirts->shirt_image = $image_name;
        }
        ShirtRepos::updateShirt($shirts);

        return redirect()->action('FirstFashionShirtController@shirt_manager')
            ->with('msg', '!!! Update successfully !!!');;
    }

    public function confirmShirt($shirt_id){
        $catnames = ShirtRepos::GetCatNameSID($shirt_id);
        $categories = CategoryRepos::getCategoryByShirtId($shirt_id);
        $shirts = ShirtRepos::getShirtById($shirt_id); //this is always an array

        return view('FirstFashion.shirt.confirmShirt',
            [
                'shirt' => $shirts[0],
                "catnames" => $catnames[0],
//                "categories" => $categories[0],
            ]
        );
    }

    public function destroyShirt(Request $request, $shirt_id)
    {
        if ($request->input('shirt_id') != $shirt_id) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionShirtController@shirt_manager');
        }

        ShirtRepos::deleteShirt($shirt_id);


        return redirect()->action('FirstFashionShirtController@shirt_manager')
        ->with('msg', '!!! Delete successfully !!!');
    }

    private function formValidateShirt($request)
    {
        return Validator::make(
            $request->all(),
            [
                'shirt_name' => ['required', 'min:5'],
                'shirt_material' => ['required', 'min:2'],
                'shirt_price' => ['required', 'numeric'],
                'shirt_image' =>['required'],
                'shirt_size' => ['required'],
                'shirt_description' => ['required'],
                'cat_id' => ['required']
            ]
        );
    }
}
