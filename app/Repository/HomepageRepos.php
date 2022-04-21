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
}
