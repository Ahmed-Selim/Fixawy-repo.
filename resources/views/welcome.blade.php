@extends('form') @section('title','Fixawy') @section('content')
<p class="text-center h1">
Welcome to Fixawy
</p>
<div class="row text-center">
    <div class="col">
        <a class="card list-group-item list-group-item-action" href="{{ route('fixer.index') }}">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-user display-1"></i></h5>
                <p class="card-text">User</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a class="card list-group-item list-group-item-action" href="{{ route('log') }}">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-user-tie display-1"></i></h5>
                <p class="card-text">Admin</p>
            </div>
        </a>
    </div>
</div>
@endsection
@section('js')
<script>
    $("#back").css('display','none');
</script>
@endsection
