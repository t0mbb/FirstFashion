@if (\Illuminate\Support\Facades\Session::get('msg') != null)
{{--      https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
<div class="alert alert-warning alert-dismissible show " role="alert"
     style="margin-left: 100px;
     background : linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
     color : whitesmoke;
     font-size: 20px;
     margin-bottom: 10px;
     border-radius: 15px;
     margin-right: -100px;
     text-align: center;
     ">
    {{\Illuminate\Support\Facades\Session::get('msg')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
