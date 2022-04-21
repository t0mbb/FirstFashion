@if (\Illuminate\Support\Facades\Session::get('msg') != null)
    {{--      https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
    <div class="alert alert-warning alert-dismissible show " role="alert"
         style="
     background : linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
     color : whitesmoke;
     border-radius: 15px;
     text-align: center;
     ">
        {{\Illuminate\Support\Facades\Session::get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
