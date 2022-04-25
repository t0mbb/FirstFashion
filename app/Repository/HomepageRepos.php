<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class HomepageRepos
{
    public static function getAllCategories(){
        $sql = 'select * ';
        $sql .= 'from category ';
        $sql .= 'order by cat_id ';

        return DB::select($sql);
    }
    public static function resultSearch($search){
        $name = '%'.$search->search.'%';
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where shirt_name like ? ';
        return DB::select ($sql, [$name]);
    }

    public static function getShirtbyCatId($cat_id){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where shirt.cat_id = ?';

        return DB::select($sql, [$cat_id]);
    }
    public static function InsertMail($shirts){
        $sql = 'insert into mail ';
        $sql .= '(shirt_name, shirt_price, shirt_image, shirt_size ) ';
        $sql .= 'values (?, ?, ?, ?) ';
        return DB::insert($sql , [$shirts[0]->shirt_name, $shirts[0]->shirt_price, $shirts[0]->shirt_image, $shirts[0]->shirt_size]);
    }
}
