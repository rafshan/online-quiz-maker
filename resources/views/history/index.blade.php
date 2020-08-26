@extends('layouts.app')


@section('content')
<h2 style="text-align: center;">History</h2><br>
<table class="table" style="width: 700px" border="1px" align="center">
  <thead>
    <tr>
      <th style="text-align: center;">Course Code</th>
      <th style="text-align: center;">Quiz Code</th>
      <th style="color: red; text-align: center">Quiz Attempt (No. of Students)</th>
      <th style="text-align: center;">Time (In Minute)</th>
      <th style="text-align: center;">No. of Question</th>
      <th style="text-align: center;">Update Question Sets</th>
    </tr>
  </thead>
  <tbody style="text-align: center;"> 
    @foreach( $data as $data)
    <tr>
      <td>{{$data->Course}}</td>
      <td>{{$data->uniqueid}}</td>
      <td style="color: red">
        <?php
        $value = $data->uniqueid;
        $total = DB::table('students')
               ->where(['uniqueid'=>$value])
              ->count('uniqueid');
              echo $total;
        ?>
      </td>
      <td>{{$data->time}}</td>
      <td>{{$data->question_lenth}}</td>
      <td><form action="/makequestion/{{$data->uniqueid}}/edit" method="get">
	  	{{ csrf_field() }}
	  	<input type="hidden" name="uniqueid" value="{{$data->uniqueid}}">
	  	<button type="submit" class="btn btn-danger">Edit</button>
	    </form></td>
    </tr>
    @endforeach
  </tbody>
</table><br>
<div style="text-align: center;">
  <a href="/"><button type="button" name="Return" class="btn btn-primary">Return</button></a><br><br>
</div>

@endsection