<?php

namespace App\Http\Controllers;


use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class FirstFashionAdminController extends Controller
{
    public function index(){
        return view('FirstFashion.index');
    }

    public function admin_manager(){
        $admins = AdminRepos::getAllAdmins();
        return view('FirstFashion.admin.admin_manager',
            [
                'admins' => $admins
            ]);
    }
    public function showAdmin($ad_id){
        $admin = AdminRepos::getAdminById($ad_id);
        $aduser = AdminRepos::getAdminNameByID($ad_id);
        $user = Session::get('ad_user');

        for ($i = 0; $i < count($aduser); $i++)
            if ($user!= $aduser[$i]->ad_user) {
                return redirect()->action('FirstFashionAdminController@admin_manager')
                    ->with('msg', '!!! You can not see details other admin !!!');

            }
            else

        return view('FirstFashion.admin.showAdmin',
            [
                'admin' => $admin[0]
            ]
        );
    }
    public function editAdmin($ad_id)
    {

        $admin = AdminRepos::getAdminByID($ad_id); //this is always an array
        $aduser = AdminRepos::getAdminNameByID($ad_id);
        $user = Session::get('ad_user');

        for ($i = 0; $i < count($aduser); $i++)
            if ($user!= $aduser[$i]->ad_user) {
                return redirect()->action('FirstFashionAdminController@admin_manager')
                    ->with('msg', '!!! You can not edit other admin !!!');
                break;
            }
            else
                return view('FirstFashion.admin.updateAdmin',
                    [
                        'admin' => $admin[0]
                    ]);

    }


    public function updateAdmin(Request $request, $ad_id)
    {
        $this->formValidateAdmin($request)->validate(); //shortcut
        if ($ad_id != $request->input('ad_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionAdminController@admin_manager');
        }
        $admin = (object)[
            'ad_id' => $request->input('ad_id'),
            'ad_user' => $request->input('ad_user'),
            'ad_pass' => sha1($request->input('ad_pass')),
            'ad_fullname' => $request->input('ad_fullname'),
            'ad_phone' => $request->input('ad_phone'),
            'ad_email' => $request->input('ad_email'),
        ];
//        $account = AdminRepos::getAllAdmins();
//        for ($i = 0; $i < count($account); $i++) {
//            if ($admin[$i]->ad_pass != $account[$i]->ad_pass) {
//                break;
//            }
//        }
        AdminRepos::updateAdmin($admin);
        return redirect()->action('FirstFashionAdminController@admin_manager')
            ->with('msg', 'Update Admin Successfully');
    }

    public function confirmAdmin($ad_id){
        $admin = AdminRepos::getAdminById($ad_id);
        $aduser = AdminRepos::getAdminNameByID($ad_id);
        $user = Session::get('ad_user');
        for($i = 0; $i < count($aduser); $i++)
            if ($user != $aduser[$i]->ad_user) {
                return redirect()->action('FirstFashionAdminController@admin_manager')
                    ->with('msg', '!!! You can not delete other admin !!!');
                break;
            }

         else
        return view('FirstFashion.admin.confirmAdmin',
            [
                'admin' => $admin[0]
            ]);
    }

    public function destroyAdmin(Request $request, $ad_id){
        if ($request->input('ad_id') != $ad_id){
            return redirect()->action('FirstFashionAdminController@admin_manager');
        }
        AdminRepos::deleteAdmin($ad_id);
        return redirect()->action('FirstFashionAdminController@admin_manager')
            ->with('msg', 'Delete Admin Successfully');
    }




    private function formValidateAdmin ($request){
        return Validator::make(
            $request->all(),
            [

                'ad_user' => ['required' ,],
                'ad_fullname' => ['required', 'min:5'],
                'ad_phone' => ['required', 'starts_with:0', 'digits:10'],
                'ad_email' => ['required', 'email'],
                'ad_pass' => ['required', function($attribute, $value, $fail) use($request){
                    $account = AdminRepos::getAllAdmins();
                    $n = 1;
                    for($i=0; $i<count($account);$i++){
                            $value = sha1($request->input('ad_pass'));
                            if ($value == $account[$i]->ad_pass) {
                                $n = 0;
                            }
                        }
                    if($n != 0) {
                        $fail ('Your confirm password not correct');
                    }
            }
                ],
            ],
            [
                'ad_phone.starts_with' => 'Phone must start with 0.',
                'ad_pass.required'=> 'Password confirm not be empty.',
                'ad_phone.digits'=> 'Phone number must be 10 digits'
            ]
        );
    }
}
