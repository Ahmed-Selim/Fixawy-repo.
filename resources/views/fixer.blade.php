@extends ('template') @section('title','User') @section('li')
<a href="{{route('search')}}" class="list-group-item list-group-item-action btn btn-outline-primary" id="search">Search</a> 
@endsection 
@section('content') 
@if (count($fixers) > 0)
@if (session('msg'))
<div class="alert alert-success">
    {{session('msg')}}
</div>
@endif
{{$fixers->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Picture</th>
            <th scope="col">Birth Date</th>
            <th scope="col">City</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fixers as $key => $data)
        <tr>
            <td>{{$data->firstname}}</td>
            <td>{{$data->lastname}}</td>
            <td>
                                <img src="{{URL::asset('storage/').'/'.$data->picture}}" alt="Fixer Picture" width="50px" height="50px">
<!--                {{$data->picture}}-->
            </td>
            <td>{{$data->birth_date}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->category}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$fixers->links()}}
@else
<div class="alert alert-warning">There's No fixers right now!</div>
@endif @endsection @section('js')
<script>
    $(document).ready(function() {
        $("ul").addClass("justify-content-center my-3") ;
        $("ul > li").addClass("page-item");
        $("ul > li > a").addClass("page-link");
        $("ul > li > span").addClass("page-link");
    });

</script>
@endsection
