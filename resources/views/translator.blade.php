@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <div>
        <h1 align="center"> WeTranslate </h1>
        <h3 align="center"> Translator </h3>
    </div>
    <br><br><br>
    <div>
        <h3>
            Welcome {{ $user->name }} to WeTranslate!
        </h3>
        <div>
            <a href="/view" style="color:#1fa2ff"><u>
                <h4 align="center">
                    View all requests
                </h4>
                </u>
            </a>
            <br>
        </div>
    </div>
    </font>
</div>
@endsection
