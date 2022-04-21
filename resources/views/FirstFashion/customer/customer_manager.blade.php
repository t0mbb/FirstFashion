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
        " class="display-4"><b>Customer Manager</b></h1>
        </div>

        <table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">
            <thead class="thead-dark">
            <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
            <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $c)
                <tr style="font-size: 20px; color: black; background-color: transparent">
                    <td>{{$c->cus_name}}</td>
                    <td>{{$c->cus_phone}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm" style="font-size: 15px"
                           href="{{route('FirstFashion.showCustomer', ['cus_id' => $c->cus_id])}}"
                        ><b>DETAIL</b></a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm" style="font-size: 15px"
                           href="{{route('FirstFashion.editCustomer', ['cus_id' => $c->cus_id])}}"
                        ><b>EDIT</b></a>
                    </td>
                    <td><a type="button" class="btn btn-danger btn-sm" style="font-size: 15px"
                           href="{{route('FirstFashion.confirmCustomer', ['cus_id' => $c->cus_id])}}"
                        ><b>DELETE</b></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection
