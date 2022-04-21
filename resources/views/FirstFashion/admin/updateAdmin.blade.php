@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: red; text-align: center; margin-left: 200px; padding-bottom: 1rem" class="display-4"><b>Update
                    admin information</b></h1>
        </div>


        @include('partials.errors')

        <form action="{{route('FirstFashion.updateAdmin', ['ad_id' => old('ad_id')?? $admin->ad_id])}}" method="post">
            @csrf
            @include('FirstFashion.admin.adminFields')

            <button type="submit" class="btn btn-danger"
                    style="margin-left: 100px; font-size: 20px"
            >Submit</button>
        </form>
    </div>
@endsection
