@if(count($errors->all()))
    <div class="row" style="margin-left: 10px">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
