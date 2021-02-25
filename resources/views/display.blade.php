@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <br><br><br>
    
    <div class="card">
    <div class="card-header"><center>WeTranslate</center></div>
        <div class="card-body">
            <label>Your Text :</label>
            <center>{{$c->text1}}</center><br>
            <label>Translated Text :</label>
            <center>{{$c->text2}}</center><br> 
        </div>
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
