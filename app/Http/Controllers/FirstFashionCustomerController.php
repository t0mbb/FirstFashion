<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirstFashionCustomerController extends Controller
{
    public function index(){
        return view('FirstFashion.index');
    }

    public function customer_manager()
    {
        $customers = CustomerRepos::getAllCustomers();
        return view('FirstFashion.customer.customer_manager',
            [
                'customers' => $customers
            ]);
    }

    public function showCustomer($cus_id)
    {

        $customer = CustomerRepos::getCustomerById($cus_id); //this is always an array of objects
        return view('FirstFashion.customer.showCustomer',
            [
                'customer' => $customer[0] //get the first element
            ]
        );
    }


    public function registerCustomer()
    {
        return view(
            'FirstFashion.customer.register',
            ['customer' => (object)[
                'cus_id' => '',
                'cus_name' => '',
                'cus_gender' => '',
                'cus_phone' => '',
                'cus_address' => '',
                'cus_email' => '',
                'cus_dob' => ''
            ]]);
    }

    public function storeCustomer (Request $request)
    {
        $this->formValidateCustomer($request)->validate(); //shortcut

        $customer = (object)[
            'cus_id' => $request->input('cus_id'),
            'cus_name' => $request->input('cus_name'),
            'cus_gender' => $request->input('cus_gender'),
            'cus_phone' => $request->input('cus_phone'),
            'cus_address' => $request->input('cus_address'),
            'cus_email' => $request->input('cus_email'),
            'cus_dob' => $request->input('cus_dob')
        ];

        $newCus = CustomerRepos::insertCustomer($customer);

        return redirect()->route('FirstFashion.homepage');
    }


    public function editCustomer($cus_id)
    {
        $customer = CustomerRepos::getCustomerById($cus_id); //this is always an array


        return view('FirstFashion.customer.updateCustomer',
            [
                'customer' => $customer[0]
            ]);
    }

    public function updateCustomer(Request $request, $cus_id)
    {
        if ($cus_id != $request->input('cus_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('FirstFashionCustomerControllers@customer_manager');
        }

        $this->formValidateCustomer($request)->validate(); //shortcut

        $customer = (object)[
            'cus_id' => $request->input('cus_id'),
            'cus_name' => $request->input('cus_name'),
            'cus_gender' => $request->input('cus_gender'),
            'cus_phone' => $request->input('cus_phone'),
            'cus_address' => $request->input('cus_address'),
            'cus_email' => $request->input('cus_email'),
            'cus_dob' => $request->input('cus_dob')

        ];
        CustomerRepos::updateCustomer($customer);
        return redirect()->action('FirstFashionCustomerController@customer_manager')
            ->with('msg', 'Update Successfully');
    }

    public function confirmCustomer($cus_id){
        $customer = CustomerRepos::getCustomerById($cus_id);
        return view('FirstFashion.customer.confirmCustomer',
            [
                'customer' => $customer[0]
            ]);
    }

    public function destroyCustomer(Request $request, $cus_id){
        if ($request->input('cus_id') != $cus_id){
            return redirect()->action('FirstFashionCustomerController@customer_manager');
        }

        CustomerRepos::deleteCustomer($cus_id);

        return redirect()->action('FirstFashionCustomerController@customer_manager')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidateCustomer($request)
    {
        return Validator::make(
            $request->all(),
            [
                'cus_name' => ['required', 'max:20', 'regex:/^[a-zA-Z]+$/u'],
                'cus_gender' => ['required'],
                'cus_phone' => ['required', 'starts_with:0', 'digits:10'],
                'cus_address' => ['required'],
                'cus_dob' => ['required', 'date' , 'after_or_equal:1920-01-01'],
                'cus_email' => ['required', 'email']
            ],
            [
                //change validation message
                'cus_name.regex' =>'Your input name not correct',
                'cus_phone.starts_with' => 'Your phone must start with 0.',
                'cus_name.required' => 'You have not entered your name',
                'cus_phone.required' => 'You have not entered your phone',
                'cus_address.required' => 'You have not entered your address',
                'cus_dob.required' => 'You have not entered your birthday',
                'cus_email.required' => 'You have not entered your email',
                'cus_gender.required' => 'You have not choose your gender',
                'cus_dob.after_or_equal' => 'You must input date of time 1920-01-01'
            ]
        );
    }
}
