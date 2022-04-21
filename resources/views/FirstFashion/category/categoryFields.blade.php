<input type="hidden" name="cat_id" value="{{old('cat_id')?? $category->cat_id}}">
<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,71,91); font-size: 30px"  for="cat_name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{old('cat_name')?? $category->cat_name}}">
</div>

<div class="form-group" style="margin-left: 100px; padding-top: 10px">
    <label style="color: rgb(255,71,91); font-size: 30px"  for="cat_image" class="font-weight-bold">Image</label>
    <img class="img-fluid" alt="responsive image" width="230" height="120" style="padding-bottom: 1rem"
         src="{{ asset('storage/images/category/'.$category->cat_image )}}" alt="">
    <input type="file" class="form-control" id="cat_image" name="cat_image"
           value="{{old('cat_image')?? $category->cat_image}}">
</div>
