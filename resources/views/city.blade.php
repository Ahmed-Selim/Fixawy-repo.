@extends ('form') 
@section('title','Cities') 
@section('content')
@if (count($Cities) > 0) 
{{$Cities->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">City</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Cities as $key => $data)
        <tr>
            <td>{{$data->city}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Cities->links()}}
@else
<div class="alert alert-warning">There's No Cities right now!</div>
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