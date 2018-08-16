@extends ('template') 
@section('title','Admin') 
@section('li')
<a href="{{ route('fixer.create') }}" class="list-group-item list-group-item-action btn btn-outline-primary">Insert Fixer</a>
<a href="{{ route('geo.create') }}" class="list-group-item list-group-item-action btn btn-outline-primary">Insert Location</a>
<a href="{{ route('cat.create') }}" class="list-group-item list-group-item-action btn btn-outline-primary">Insert Category</a>
<a href="{{ route('search') }}" class="list-group-item list-group-item-action btn btn-outline-primary">Search</a> 
@endsection 
@section('content') 
@if (session('msg')) 
@if (session('msg') == "true")
<div class="alert alert-success">
    "Login Successful"
</div>
@endif
@endif
<div class="card-deck my-3 text-center">
    <a class="card list-group-item list-group-item-action" href="#">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Admins</h5>
            </div>
            <div class="card-body my-4">
                @if ($admins == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> Admin</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$admins}}</span> Admins</p>
                @endif
            </div>
        </div>
    </a>
    <a class="card list-group-item list-group-item-action" href="{{ route('fix') }}">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Fixers</h5>
            </div>
            <div class="card-body my-4">
                @if ($fixers == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> Fixer</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$fixers}}</span> Fixers</p>
                @endif
            </div>
        </div>
    </a>
    <a class="card list-group-item list-group-item-action" href="{{route('cat.index') }}">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Categories</h5>
            </div>
            <div class="card-body my-4">
                @if ($categories == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> Category</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$categories}}</span> Categories</p>
                @endif
            </div>
        </div>
    </a>
</div>
<div class="card-deck my-3 text-center">
    <a class="card list-group-item list-group-item-action" href=" {{route('country') }}">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Countries</h5>
            </div>
            <div class="card-body my-4">
                @if ($countries == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> Country</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$countries}}</span> Countries</p>
                @endif
            </div>
        </div>
    </a>
    <a class="card list-group-item list-group-item-action" href="{{ route('city') }}">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Cities</h5>
            </div>
            <div class="card-body my-4">
                @if ($cities == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> City</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$cities}}</span> Cities</p>
                @endif
            </div>
        </div>
    </a>
    <a class="card list-group-item list-group-item-action" href="{{ route('area') }}">
        <div class="card-body">
            <div class="card-header bg-transparent">
                <h5 class="card-title">Areas</h5>
            </div>
            <div class="card-body my-4">
                @if ($areas == 1)
                <p class="card-text">There is <span class="badge badge-secondary">1</span> Area</p>
                @else
                <p class="card-text">There are <span class="badge badge-secondary">{{$areas}}</span> Areas</p>
                @endif
            </div>
        </div>
    </a>
</div>
@endsection
