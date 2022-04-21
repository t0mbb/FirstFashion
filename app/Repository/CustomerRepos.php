<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomers(){
        $sql = 'select * ';
        $sql .= 'from customer ';
        $sql .= 'order by cus_id ';

        return DB::select ($sql);
    }

    public static function getCustomerById($cus_id){
        $sql = 'select * ';
        $sql .= 'from customer as c  ';
        $sql .= 'where cus_id = ? ';

        return DB::select($sql, [$cus_id]);
    }

    public static function insertCustomer($customer){
        $sql = 'insert into customer ';
        $sql .= '(cus_name, cus_gender, cus_phone, cus_address, cus_email, cus_dob) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$customer->cus_name, $customer->cus_gender, $customer->cus_phone, $customer->cus_address, $customer->cus_email, $customer->cus_dob]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function updateCustomer($customer){
        $sql = 'update customer ';
        $sql .= 'set cus_name = ?, cus_gender = ?, cus_phone = ?, cus_address = ?, cus_email = ?, cus_dob = ? ';
        $sql .= 'where cus_id = ? ';

        DB::update($sql, [$customer->cus_name, $customer->cus_gender, $customer->cus_phone,
            $customer->cus_address, $customer->cus_email, $customer->cus_dob, $customer->cus_id]);
    }

    public static function deleteCustomer($cus_id){
        $sql = 'delete from customer ';
        $sql .= 'where cus_id = ? ';

        DB::delete($sql, [$cus_id]);
    }
}
