@extends ('form') 
@section('title','Areas') 
@section('content')
@if (count($Areas) > 0) 
{{$Areas->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Area</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Areas as $key => $data)
        <tr>
            <td>{{$data->area}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Areas->links()}}
@else
<div class="alert alert-warning">There's No Areas right now!</div>
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