<input type="hidden" name="cus_id" value="{{old('cus_id')?? $customer->cus_id}}">
<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,91,71); font-size: 30px" for="cus_fullname" class="font-weight-bold">Full Name</label>
    <input type="text" class="form-control" id="cus_name" name="cus_name" value="{{old('cus_name')?? $customer->cus_name}}">
    {{--        when removing title value to trigger "required" validation, --}}
    {{--        old('title') is not set so $book['title'] is shown--}}
    {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,91,71); font-size: 30px" for="cus_gender" class="font-weight-bold">Gender</label>
    <select id="cus_gender" class="form-control" name="cus_gender"
            value="{{old('cus_gender')?? $customer->cus_gender}}">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color:rgb(255,91,71); font-size: 30px" for="cus_phone" class="font-weight-bold">Phone</label>
    <input type="text" class="form-control" id="cus_phone" name="cus_phone" value="{{old('cus_phone')?? $customer->cus_phone}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,91,71); font-size: 30px" for="cus_address" class="font-weight-bold">Address</label>
    <input type="text" class="form-control" id="cus_address" name="cus_address" value="{{old('cus_address')?? $customer->cus_address}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,91,71); font-size: 30px" for="cus_email" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="cus_email" name="cus_email" value="{{old('cus_email')?? $customer->cus_email}}">
</div>

<div class="form-group" style="margin-left: 100px">
    <label style="color: rgb(255,91,71); font-size: 30px" for="cus_dob" class="font-weight-bold">Date of Birth</label>
    <input type="date" class="form-control" id="cus_dob" name="cus_dob" value="{{old('cus_dob')?? $customer->cus_dob}}">
</div>


