<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategories () {
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'order by cat_id ';

        return DB::select ($sql);
    }

    public static function insertCategory ($category){
        $sql = 'insert into category ';
        $sql .= '(cat_name, cat_image) ';
        $sql .= 'values (?, ?) ';

        $result =  DB::insert($sql, [$category->cat_name, $category->cat_image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function getAllCategoryInTableShirt()
    {
        $sql = 'select distinct cat_id ';
        $sql .= 'from shirt ';
        return DB::select($sql);
    }
    public static function getCategoryByShirtId($shirt_id){
        $sql = 'select c.* ';
        $sql .= 'from category as c ';
        $sql .= 'join shirt as s on c.cat_id = s.shirt_id ';
        $sql .= 'where s.shirt_id = ?';

        return DB::select($sql, [$shirt_id]);
    }


    public static function getCategoryById ($cat_id){
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'where cat_id = ? ';

        return DB::select($sql, [$cat_id]);
    }

    public static function updateCategory ($category){
        $sql = 'update category ';
        $sql .= 'set cat_name = ?, cat_image = ? ';
        $sql .= 'where cat_id = ? ';

        DB::update($sql, [$category->cat_name, $category->cat_image, $category->cat_id]);

    }

    public static function deleteCategory($cat_id){
        $sql = 'delete from category ';
        $sql .= 'where cat_id = ? ';

        DB::delete($sql, [$cat_id]);
    }
}
