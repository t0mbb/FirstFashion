@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
        border-radius: 15px;
        color: whitesmoke; margin-left: 400px; margin-right: 190px;
        text-align : center;
        font-size: 30px;
        padding-bottom: 10px;
        margin-bottom: 50px;
        font-family: 'Century';"  class="display-4"><b>Update An Existing Customer</b></h1>
        </div>


        @include('partials.errors')

        <form action="{{route('FirstFashion.updateCustomer', ['cus_id' => old('cus_id')?? $customer->cus_id])}}" method="post">
            @csrf
            @include('FirstFashion.customer.customerFields')

            <button style="font-size: 20px; margin-left: 100px" type="submit" class="btn btn-danger"><b>Update</b></button>
        </form>
    </div>
@endsection
