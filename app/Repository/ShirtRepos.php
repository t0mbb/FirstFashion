<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class ShirtRepos
{
    public static function getAllShirt()
    {
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'order by shirt_id ';

        return DB::select($sql);
    }

    public static function getAllShirtWithCategory() {
        $sql = 'select s.*, c.cat_name as cat_name ';
        $sql .= 'from shirt as s ';
        $sql .= 'join category as c on c.cat_id = s.cat_id ';
        $sql .= 'order by c.cat_name';

        return DB::select ($sql);

    }
    public static function insertShirt($shirts)
    {
        $sql = 'insert into shirt ';
        $sql .= '(shirt_name, shirt_image, cat_id, shirt_material, shirt_size, shirt_price, shirt_description) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?) ';

        $result = DB::insert($sql, [$shirts->shirt_name, $shirts->shirt_image, $shirts->cat_id, $shirts->shirt_material,
            $shirts->shirt_size, $shirts->shirt_price, $shirts->shirt_description]);
        if ($result) {
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function getShirtById($shirt_id){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where shirt_id = ? ';

        return DB::select($sql, [$shirt_id]);
    }

    public static function updateShirt($shirts){
        $sql = 'update shirt ';
        $sql .= 'set shirt_name = ?, shirt_image = ?, cat_id = ?, shirt_material = ?, shirt_size = ?, shirt_price = ?, shirt_description = ? ';
        $sql .= 'where shirt_id = ? ';

        DB::update($sql, [$shirts->shirt_name, $shirts->shirt_image, $shirts->cat_id, $shirts->shirt_material, $shirts->shirt_size, $shirts->shirt_price, $shirts->shirt_description, $shirts->shirt_id]);
    }

    public static function deleteShirt($shirt_id){
        $sql = 'delete from shirt ';
        $sql .= 'where shirt_id = ? ';

        DB::delete($sql, [$shirt_id]);
    }
    public static function getAllCatName(){
        $sql = 'select cat_name ' ;
        $sql .= 'from category ' ;
        $sql .= 'join shirt on category.cat_id = shirt.cat_id ';
        return DB::select($sql);
    }

    public static function GetCatNameSID($shirt_id){
        $sql = 'select cat_name ' ;
        $sql .= 'from category ' ;
        $sql .= 'join shirt on category.cat_id = shirt.cat_id ';
        $sql .= 'where shirt_id = ? ';
        return DB::select($sql,[$shirt_id]);
    }

    public static function getShirtCoat(){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where cat_id = 1 ';
        return DB::select($sql);
    }
    public static function getShirtPolo(){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where cat_id = 2 ';
        return DB::select($sql);
    }
    public static function getShirtSweater(){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where cat_id = 3 ';
        return DB::select($sql);
    }
    public static function getShirtTshirt(){
        $sql = 'select * ';
        $sql .= 'from shirt ';
        $sql .= 'where cat_id = 4 ';
        return DB::select($sql);
    }
}
