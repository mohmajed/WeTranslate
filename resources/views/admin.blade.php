@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <div>
        <h1 align="center"> WeTranslate </h1>
        <h2 align="center"> ADMIN </h2>
    </div>
    <br><br><br>
    <div>
        <h3>
            Welcome {{ $user->name }} to WeTranslate!
        </h3>
    </div>
    </font>
</div>
@endsection
