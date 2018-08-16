@extends ('form') @section('title','Admin - Login') @section('content')
@if (session('msg'))
@if (session('msg') == "false")
<div class="alert alert-danger">
        Invalid Email/Password!
    </div>
@endif
@endif
    <form class="form-horizontal" action="{{route('login')}}" style="" method="post">
        {{csrf_field()}}
        <legend>Admin - Login</legend>
        <div class="form-group">
            <label class="control-label" for="email">Email:</label>
            <div class="">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="pass">Password:</label>
            <div class="">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password" required>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Login</button>
        </div>
    </form>
@endsection
@section('js')
<script>
    $("#back").css('display','none');
</script>
@endsection
