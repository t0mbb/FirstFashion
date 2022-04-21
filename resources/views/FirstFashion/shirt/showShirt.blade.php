@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: rgb(255,71,91); text-align: center; margin-left: 200px; padding-bottom: 1rem" class="display-4"
            ><b>Shirt Details</b></h1>
        </div>
        @include('FirstFashion.shirt.shirtDetails')
        <a type="button" href="{{route('FirstFashion.shirt_manager')}}" class="btn btn-info"
           style="margin-left: 100px; font-size: 20px"
        >&lt;&lt;&nbsp;Shirt Manager</a>
    </div>

@endsection
