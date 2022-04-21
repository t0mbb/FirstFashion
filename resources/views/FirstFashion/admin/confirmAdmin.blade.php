@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: blue; text-align: center; margin-left: 200px; padding-bottom: 2rem" class="display-4"><b>Are
                    you sure to delete this Admin?</b></h1>
        </div>

        @include('FirstFashion.admin.adminDetails')
        <form action="{{route('FirstFashion.destroyAdmin', ['ad_id' => $admin->ad_id])}}" method="post">
            @csrf
            <input type="hidden" name="ad_id" value="{{$admin->ad_id}}">
            <button type="submit" class="btn btn-danger"
                    style="margin-left: 100px; font-size: 20px"
            ><b>Delete</b></button>
            <a href="{{route('FirstFashion.admin_manager')}}" class="btn btn-info"
               style="font-size: 20px"
            ><b>Cancel</b></a>
        </form>
    </div>
@endsection
