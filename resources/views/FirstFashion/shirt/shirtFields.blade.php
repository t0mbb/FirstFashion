<input type="hidden" name="shirt_id" value="{{old('shirt_id')?? $shirt->shirt_id}}">
<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px" for="shirt_name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="shirt_name" name="shirt_name"
           value="{{old('shirt_name')?? $shirt->shirt_name}}">
</div>

<div class="mb-3" style="margin-left: 100px">
    <label  style="color: rgb(255,71,91); font-size: 30px" for="shirt_image" class="font-weight-bold">Images</label>
    <img class="img-fluid" style="margin-left: 330px;margin-bottom: 10px;" alt="Shirt Image" width="150" height="150" src="{{ asset('storage/images/shirt/'.$shirt->shirt_image )}}" alt="">
    <input class="form-control" type="file" id="shirt_image" name="shirt_image" value="{{old('shirt_image')?? $shirt->shirt_image}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label  style="color: rgb(255,71,91); font-size: 30px; margin-top: 10px" for="shirt_material"
            class="font-weight-bold">Material</label>
    <input type="text" class="form-control" id="shirt_material" name="shirt_material"
           value="{{old('shirt_material')?? $shirt->shirt_material}}">
</div>

<div class="form-group" style="margin-left: 100px">
<label  style="color: rgb(255,71,91); font-size: 30px" for="shirt_size" class="font-weight-bold">Size</label>
    <select id="shirt_size" class="form-control" name="shirt_size"
            value="{{old('shirt_size')?? $shirt->shirt_size}}">
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
    </select>
</div>

<div class="form-group" style="margin-left: 100px">
    <label  style="color: rgb(255,71,91); font-size: 30px" for="shirt_price" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="shirt_price" name="shirt_price"
           value="{{old('shirt_price')?? $shirt->shirt_price}}">
</div>

@php
    $pId = old('cat_id') ?? $shirt->cat_id?? null;
@endphp
<div class="form-group" style="margin-left: 100px">
    <label  style="color: rgb(255,71,91); font-size: 30px" for="cat_id" class="font-weight-bold">Category</label>
    <select class="form-control" id="cat_id" name="cat_id" style="margin-bottom: 10px">
        <option value="0">Please select category ... </option>
        @foreach($categories as $c)
            <option value="{{old('cat_id')?? $c->cat_id}}"
                {{ ($pId != null && $c->cat_id == $pId) ? 'selected' : '' }}
            >{{old('cat_name')?? $c->cat_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px" for="shirt_description" class="font-weight-bold">Description</label>
    <input type="text" class="form-control" id="shirt_description" name="shirt_description"
           value="{{old('shirt_description')?? $shirt->shirt_description}}">
</div>


