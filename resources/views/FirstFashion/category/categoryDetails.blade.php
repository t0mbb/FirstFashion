{{--<dl class="row">--}}
{{--    <dt class="col-sm-3">Name</dt>--}}
{{--    <dd class="col-sm-9">{{$category->cat_name}}</dd>--}}

{{--    <dt class="col-sm-3">Image</dt>--}}
{{--    <dd class="col-sm-9">--}}
{{--        <img class="img-fluid" alt="responsive image" width="230" height="120"--}}
{{--             src="{{ asset('storage/images/category/'.$category->cat_image )}}" alt=""></dd>--}}
{{--</dl>--}}
<table class="table table-primary table-bordered border-bold" style="margin-left: 100px;">
    {{--    <tr style="font-size: 20px">--}}
    {{--        <th class="table-primary">ID</th>--}}
    {{--        <td>{{ $classroom->id }}</td>--}}
    {{--    </tr>--}}
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Name</th>
        <td>{{$category->cat_name}}</td>
    </tr>
    <tr class="table-primary border-info-bold" style="font-size: 20px; background-color: rgb(255,99,71); color: whitesmoke">
        <th style="font-size: 20px; color: black; background-color: rgb(255,99,71);">Image</th>
        <td><img class="img-fluid" alt="responsive image" width="230" height="200"
             src="{{ asset('storage/images/category/'.$category->cat_image )}}"></td>
    </tr>
</table>
