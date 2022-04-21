<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirstFashionCategoryController extends Controller
{
    public function index(){
        return view('FirstFashion.index');
    }
    public function category_manager()
    {
        $categories = CategoryRepos::getAllCategories();

        return view('FirstFashion.category.category_manager',
            [
                'categories' => $categories,
            ]);
    }

    public function createCategory()
    {

        return view(
            'FirstFashion.category.newCategory',
            ['category' => (object)[
                'cat_id' => '',
                'cat_name' => '',
                'cat_image' => '',
            ]]);

    }

    public function storeCategory(Request $request)
    {
        $this->formValidateCategory($request)->validate(); //shortcut
        $category = (object)[
            'cat_name' => $request->input('cat_name'),
            'cat_image' => $request->input('cat_image'),
        ];

        if($request ->hasFile('cat_image'))
        {
            $destination_path = 'public/images/category';
            $image = $request->file('cat_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('cat_image')->storeAs($destination_path, $image_name);

            $category->cat_image = $image_name;
        }
        $newCat = CategoryRepos::insertCategory($category);

        return redirect()
            ->action('FirstFashionCategoryController@category_manager');
    }

    public function showCategory($cat_id){
        $category = CategoryRepos::getCategoryById($cat_id);
        return view('FirstFashion.category.showCategory',
            [
                'category' => $category[0]
            ]
        );
    }

    public function editCategory($cat_id)
    {
        $category = CategoryRepos::getCategoryById($cat_id); //this is always an array


        return view(
            'FirstFashion.category.updateCategory',
            ['category' => $category[0]]);
    }

    public function updateCategory (Request $request, $cat_id)
    {
        if ($cat_id != $request->input('cat_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionCategoryController@category_manager');
        }

        $this->formValidateCategory($request)->validate();

        $category = (object)[
            'cat_id' => $request->input('cat_id'),
            'cat_name' => $request->input('cat_name'),
            'cat_image' => $request->input('cat_image'),
        ];

        if($request->hasFile('cat_image')){
            $destination_path = 'public/images/category';
            $image = $request->file('cat_image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('cat_image')->storeAs($destination_path, $image_name);

            $category->cat_image = $image_name;
        }
        CategoryRepos::updateCategory($category);

        return redirect()->action('FirstFashionCategoryController@category_manager');
    }

    public function confirmCategory ($cat_id){
        $category = CategoryRepos::getCategoryById($cat_id); //this is always an array

        return view('FirstFashion.category.confirmCategory',
            [
                'category' => $category[0]
            ]
        );
    }

    public function destroyCategory (Request $request, $cat_id)
    {
        if ($request->input('cat_id') != $cat_id) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionCategoryController@category_manager');
        }
        $sid = CategoryRepos::getAllCategoryInTableShirt();
        for ($i = 0; $i < count($sid); $i++)
            if ($cat_id == $sid[$i]->cat_id)
            {
                return redirect()->action('FirstFashionCategoryController@category_manager')
                    ->with('msg', 'Careful , Its still have product in Category.');
            }
        else
        CategoryRepos::deleteCategory($cat_id);
        return redirect()->action('FirstFashionCategoryController@category_manager')
            ->with('msg', 'Congrats, Delete Category Successfully');
    }

    private function formValidateCategory($request){
        return Validator::make(
            $request->all(),
            [
                'cat_name' => ['required', 'min:2'],
                'cat_image' => ['required']
            ]
        );
    }
}
