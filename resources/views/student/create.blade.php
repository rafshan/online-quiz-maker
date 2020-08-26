@extends('layouts.app')

@section('content')

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

<form method="post" action="{{route('student.store')}}">
	{{ csrf_field() }}

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput">Student ID</label>
	    <input type="text" name="student_id" class="form-control " id="formGroupExampleInput" placeholder="E.g. 111222333" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Quiz Code</label>
	    <input type="text" name="exam_code" class="form-control" id="formGroupExampleInput2" placeholder="E.g. A6xgP" required>
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Submit</button><br>
	  <a href="/"><button type="button" name="Return" class="btn btn-primary btn-block">Return</button></a><br><br>
	  <h4 style="color: red">***Keep in mind that Question Set (next page) would be invalid after limited Quiz time. Try to give Answer in time.</h4>
	</div>

</form>

    @endsection
