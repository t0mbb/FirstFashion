<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmins(){
        $sql = 'select * ';
        $sql .= 'from admin ';
        $sql .= 'order by ad_id ';
        return DB::select($sql);
    }

    public static function getAdminById($ad_id){
        $sql = 'select * ';
        $sql .= 'from admin ';
        $sql .= 'where admin.ad_id = ? ';
        return DB::select($sql, [$ad_id]);
    }
    public static function getAdminNameByID($ad_id)
    {
        $sql = 'select ad_user ';
        $sql .= ' from admin ';
        $sql .= ' where admin.ad_id = ? ';
        return DB::select($sql , [$ad_id]);
    }
    public static function updateAdmin($admin){
        $sql = 'update admin ';
        $sql .= 'set ad_fullname = ?, ad_phone = ?, ad_email = ?, ad_user = ? ';
        $sql .= 'where ad_id = ? ';

        DB::update($sql, [$admin->ad_fullname, $admin->ad_phone, $admin->ad_email, $admin->ad_user, $admin->ad_id]);

    }
    public static function deleteAdmin($ad_id){
        $sql = 'delete from admin ';
        $sql .= 'where ad_id = ? ';

        DB::delete($sql, [$ad_id]);
    }
    public static function getAllMail(){
        $sql = 'select * from mail ';

        return DB::select($sql);
    }

}
