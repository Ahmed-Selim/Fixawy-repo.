@extends ('form') 
@section('title','Countries') 
@section('content')
@if (count($Countries) > 0) 
{{$Countries->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Country</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Countries as $key => $data)
        <tr>
            <td>{{$data->Country}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Countries->links()}}
@else
<div class="alert alert-warning">There's No Countries right now!</div>
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