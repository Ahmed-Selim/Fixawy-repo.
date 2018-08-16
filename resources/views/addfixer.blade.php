@extends ('form') @section('title','Add Fixer') @section('content')
    <form class="form-horizontal" action="{{route('fixer.store')}}" style="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <legend>Add Fixer</legend>
        <div class="form-group">
            <label class="control-label" for="fname">First Name:</label>
            <div class="">
                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Firstname" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="lname">Last Name:</label>
            <div class="">
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Lastname" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="pic">Picture:</label>
            <div class="">
                <input type="file" class="form-control" name="pic" id="pic" placeholder="Upload Picture" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="bd">Birth Date:</label>
            <div class="">
                <input type="date" class="form-control" name="bd" id="bd" placeholder="Enter BirthDate" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="city">Select City:</label>
            <select class="custom-select" name="city" id="city" required>
                @foreach ($cities as $key => $val)
                    <option>{{$val->city}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="cat">Select Category:</label>
            <select class="custom-select" name="cat" id="cat" required>
                @foreach ($categories as $key => $val)
                    <option>{{$val->category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
    </form>
@endsection