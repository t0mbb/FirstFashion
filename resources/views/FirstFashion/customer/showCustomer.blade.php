@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: red; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4"><b>Customer
                    Details</b></h1>
        </div>

        @include('FirstFashion.customer.customerDetails')
        <a type="button" href="{{route('FirstFashion.customer_manager')}}" class="btn btn-danger"
           style="margin-left: 100px; font-size: 20px"
        ><b>&lt;&lt;&nbsp;Customer Manager</b></a>
    </div>

@endsection
