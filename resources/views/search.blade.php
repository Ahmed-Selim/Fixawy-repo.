@extends ('form') 
@section('title','Search Fixers') 
@section('content')
<!--    Search by Category  -->
<form class="form-horizontal border p-2" action="{{route('search-fix')}}" style="" method="post">
    {{csrf_field()}}
    <legend>Search by Category</legend>
    <input hidden value="1" name="form">
    <div class="form-group">
            <label class="control-label" for="cat">Select Category:</label>
            <select class="custom-select" name="cat" id="cat" required>
                @foreach ($Categories as $key => $val)
                    <option>{{$val->category}}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
<!--    Search by City  -->
<form class="form-horizontal border p-2 my-3" action="{{route('search-fix')}}" style="" method="post">
    {{csrf_field()}}
    <legend>Search by City</legend>
    <input hidden value="2" name="form">
    <div class="form-group">
            <label class="control-label" for="city">Select City:</label>
            <select class="custom-select" name="city" id="city" required>
                @foreach ($Cities as $key => $val)
                    <option>{{$val->City}}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
<!--    Search by Area  -->
<form class="form-horizontal border p-2" action="{{route('search-fix')}}" style="" method="post">
    {{csrf_field()}}
    <legend>Search by Area</legend>
    <input hidden value="2" name="form">
    <div class="form-group">
            <label class="control-label" for="city">Select Area:</label>
            <select class="custom-select" name="city" id="area" required>
                <?php $i = 0; ?>
                @foreach ($Areas as $key => $val)
                    <option value="{{$Cities[$i]->City}}">{{$Areas[$i++]->Area}}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </div>
</form>
@endsection
@section('js')
<script>
    $("#back").css('display','none');
</script>
@endsection