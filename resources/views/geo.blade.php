@extends ('form') 
@section('title','Locations') 
@section('content')
@if (count($Geos) > 0) 
{{$Geos->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Country</th>
            <th scope="col">City</th>
            <th scope="col">Area</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Geos as $key => $data)
        <tr>
            <td>{{$data->country}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->area}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Geos->links()}}
@else
<div class="alert alert-warning">There's No Locations right now!</div>
@endif 
@endsection 
@section('js')
<script>
    $(document).ready(function() {
        $("ul").addClass("justify-content-center my-3") ;
        $("ul > li").addClass("page-item");
        $("ul > li > a").addClass("page-link");
        $("ul > li > span").addClass("page-link");
    });

</script>
@endsection