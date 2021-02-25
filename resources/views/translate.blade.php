@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <br><br><br>
    
    <div class="card">
    <div class="card-header"><center>WeTranslate</center></div>
        <div class="card-body">
            <label>Text :</label>
            <center>{{$c->text1}}</center><br>
            <label>Translation :</label>
            <form action="/submit/{{$c->id}}" method="post">
                <div class="card-body">
                    @csrf
                    <textarea class="form-control" name="text2"> </textarea><br>
                    <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </center>
                </div>
            </form>
    </div>
    </div>

    <form action="/home/{{ $user->id }}" method="get">
                <div class="card-body">
                    @csrf
                    <br>
                    <button type="submit" class="btn btn-primary">Return to Home</button>
                    </center>
                </div>
    </form>
    </font>
</div>
@endsection
