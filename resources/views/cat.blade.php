@extends ('form') 
@section('title','Categories') 
@section('content')
@if (count($Cats) > 0) 
{{$Cats->links()}}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Cats as $key => $data)
        <tr>
            <td>{{$data->category}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$Cats->links()}}
@else
<div class="alert alert-warning">There's No Categories right now!</div>
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