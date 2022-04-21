@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 style="color: rgb(255,71,91); text-align: center" class="display-4">Update An Existing Shirt</h1>
        </div>


        @include('partials.errors')

        <form action="{{route('FirstFashion.updateShirt', ['shirt_id' => old('shirt_id')?? $shirt->shirt_id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('FirstFashion.shirt.shirtFields')

            <button type="submit" class="btn btn-success" style="font-size: 20px; margin-left: 100px">Update</button>
        </form>
    </div>
@endsection
