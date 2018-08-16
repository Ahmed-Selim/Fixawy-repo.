@extends ('form') @section('title','Add Category') @section('content')
<form class="form-horizontal" action="{{route('cat.store')}}" style="" method="post">
    {{csrf_field()}}
    <legend>Add Category</legend>
    <div class="form-group">
        <label class="control-label" for="Category">Category:</label>
        <div class="">
            <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category" required>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
@endsection
