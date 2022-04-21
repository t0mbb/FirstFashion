@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: rgb(255,91,71); text-align: center" class="display-4"><b>Update category</b></h1>
        </div>


        @include('partials.errors')

        <form action="{{route('FirstFashion.updateCategory', ['cat_id' => old('cat_id')?? $category->cat_id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('FirstFashion.category.categoryFields')

            <button type="submit" class="btn btn-danger" style="font-size: 20px; margin-left: 100px">Submit</button>
        </form>
    </div>
@endsection
