@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Successfully logged in!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2 style="text-align: center;">Create Online Quizzes Easily.</h2><br><br>

                    [ Readme ]<br>
                    1. Remember Quiz Token after making Question Set.<br>
                    2. Review your prepared Question Set before taking Quiz.<br>
                    3. See student marks in the 'Marks' section.<br>
                    4. Quiz time & number of question is not editable.<br>
                    5. See previous exam details in 'History' section.<br>
                </div>
            </div>
            <a href="/"><button type="button" name="Return" class="btn btn-success">Okay</button></a>
        </div>
    </div>
</div>
@endsection
