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
        font-family: 'Century';"  class="display-4">Are you sure you want to delete?</h1>
        </div>
        @include('FirstFashion.category.categoryDetails')

        <form action="{{route('FirstFashion.destroyCategory', ['cat_id' =>$category->cat_id])}}" method="post">
            @csrf
            <input type="hidden" name="cat_id" value="{{$category->cat_id}}">
            <button style="margin-left: 100px; font-size: 20px" type="submit" class="btn btn-danger">Delete</button>
            <a style="font-size: 20px"
                href="{{route('FirstFashion.category_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
