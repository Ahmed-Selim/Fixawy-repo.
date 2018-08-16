@extends ('form') @section('title','Add Location') @section('content')
<form class="form-horizontal" action="{{route('geo.store')}}" style="" method="post">
    {{csrf_field()}}
    <legend>Add Location</legend>
    <div class="form-group">
        <label class="control-label" for="country">Country:</label>
        <div class="">
            <input type="text" class="form-control" name="country" id="country" placeholder="Enter Country" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="city">City:</label>
        <div class="">
            <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="area">Area:</label>
        <div class="">
            <input type="text" class="form-control" name="area" id="area" placeholder="Enter Area" required>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
@endsection
