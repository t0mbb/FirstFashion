@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; padding-bottom: 2rem; margin-left: 200px"
                class="display-4"><b>Are you sure to delete this Customer?</b></h1>
        </div>

        @include('FirstFashion.customer.customerDetails')
        <form action="{{route('FirstFashion.destroyCustomer', ['cus_id' => $customer->cus_id])}}" method="post">
            @csrf
            <input type="hidden" name="cus_id" value="{{$customer->cus_id}}">
            <button style="margin-left: 100px; font-size: 20px" type="submit" class="btn btn-danger"
            ><b>DELETE</b></button>
            <a style="font-size: 20px" href="{{route('FirstFashion.customer_manager')}}" class="btn btn-info"
            ><b>CANCEL</b></a>
        </form>
    </div>
@endsection
