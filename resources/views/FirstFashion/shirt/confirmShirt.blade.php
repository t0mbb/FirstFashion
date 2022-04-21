@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: rgb(255,71,91); text-align: center; padding-bottom: 10px; margin-left: 200px"
                class="display-4">Are you sure you want to delete?</h1>
        </div>
        @include('FirstFashion.shirt.shirtDetails')

        <form action="{{route('FirstFashion.destroyShirt', ['shirt_id' =>$shirt->shirt_id])}}" method="post">
            @csrf
            <input type="hidden" name="shirt_id" value="{{$shirt->shirt_id}}">
            <button  style="margin-left: 100px; font-size: 20px" type="submit" class="btn btn-danger">Delete</button>
            <a style="font-size: 20px" href="{{route('FirstFashion.shirt_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
