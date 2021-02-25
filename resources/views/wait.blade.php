@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <div>
        <h1 align="center"> WeTranslate </h1>
    </div>
    <br><br><br>
     <div>
            <a href="/home/{{ $user->id }}">
                <h4 align="left">
                    Go Back
                </h4>
            </a>
            <br>
        </div>
    <form action="/result/{{ $c->id }}" method="post">
                <div class="card-body">
                    @csrf
                    <label>Your Text has been recieved. Please wait a Translator to translate it then check</label><br>
                    <button type="submit" class="btn btn-primary">Check</button>
                    </center>
                </div>
     </form>
     </font>
</div>
@endsection
