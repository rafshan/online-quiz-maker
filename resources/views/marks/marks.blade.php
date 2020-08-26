@extends('layouts.app')


@section('content')
<h2 style="text-align: center;">Showing Results</h2><br>
<table class="table" style="width: 500px" border="1px" align="center">
  <thead>
    <tr>
      <th style="text-align: center;">Student ID</th>
      <th style="text-align: center;">Mark</th>
    </tr>
  </thead>
  <tbody style="text-align: center;">
    @foreach( $data_exam_code as $data)
    <tr>
      <td>{{$data->student_id}}</td>
      <td>{{$data->score}}</td>
    </tr>
  @endforeach
   @foreach( $data_course_code as $data)
    <tr>
      <td>{{$data->student_id}}</td>
      <td>{{$data->score}}</td>
    </tr>
  @endforeach
  </tbody>
</table><br>
<div style="text-align: center;">
  <a href="/"><button type="button" name="Return" class="btn btn-primary">Return</button></a>
  <a href="/marks"><button type="button" name="Return" class="btn btn-success">Search Again</button></a><br><br>
</div>

@endsection