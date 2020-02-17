@if($errors->any())
    <div class="succerr alert alert-info alert-dismissible succerr">
        <button class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success alert-dismissible succerr">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success: </strong>
        {{session('success')}}
    </div>
@endif
@if(session('errorInfo'))
    <div class="alert alert-info alert-dismissible succerr">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error: </strong>
        {{session('errorInfo')}}
    </div>
@endif