@extends('layouts.app')
@section('content')

<form method="get" action="{{route('marks.create')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
		<h1 style="text-align: center;">Student Marks</h1><br>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">See Marks by Course Code</label>
	    <input type="text" name="course_code" class="form-control " id="formGroupExampleInput" placeholder="example: SWE123">
	  </div>
	  <div>
	  	<br><h3 style="color: red; text-align: center;">OR</h3><br>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">See Marks by Quiz Code</label>
	    <input type="text" name="exam_code" class="form-control" id="formGroupExampleInput2" placeholder="E.g. A6xgP">
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Search</button><br>
	  <a href="/"><button type="button" name="Return" class="btn btn-primary btn-block">Return</button></a>
	</div>

</form>

@endsection