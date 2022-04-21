<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManualAuthController extends Controller
{
    public function ask(Request $request){
        return view('FirstFashion.manualAuth.login');
    }

    public function signin(Request $request){
        $ad_user = $request->input('ad_user');
        $ad_pass = sha1($request->input('ad_pass'));

        $account = AdminRepos::getAllAdmins();

        $this->formValidateLogin($request)->validate(); //shortcut
        for($i = 0; $i < count($account); $i++) {
            if ($ad_user == $account[$i]->ad_user && $ad_pass == $account[$i]->ad_pass) {
                break;
            }
        }
        if ($i < count($account)) {
            Session::put('ad_user', $request->input('ad_user'));
            return redirect()->route('FirstFashion.index');
        } else {
            return redirect()->route('auth.ask')
                ->with('msg', 'Your username or password not correct');;

        }
    }


    public function signout(){
        if (Session::has('ad_user')){
            Session::forget('ad_user');
        }
        return redirect()->action('ManualAuthController@ask');
    }

    private function formValidateLogin ($request){
        return Validator::make(
            $request->all(),
            [

                'ad_pass' => ['required', function($attribute, $value, $fail) use($request){
                    $ad_user = $request->input('ad_user');
                    $account = AdminRepos::getAllAdmins();
                    $n=0;
                    for($i=0; $i<count($account);$i++){
                        if ($ad_user == $account[$i]->ad_user) {
                            $value = sha1($request->input('ad_pass'));
                            if ($value != $account[$i]->ad_pass) {
                                $n += 1;
                            }
                        }

                    }


                }],
            ],
            [
                'ad_pass.required'=> ''
            ]

        );
    }

}

