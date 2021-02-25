@extends('layouts.app')

@section('content')
<div class="container">
<font color="white">
    <div>
        <h1 align="center"> WeTranslate </h1>
        
    </div>
    <br><br><br>
    <div>
            <a href="/home/{{ $user->id }}" style="color:#1fa2ff;"><u>
                <h4 align="left">
                    Go Back
                </h4></u>
            </a>
            <br>
        </div>
    <table class="table table-hover">
            <thead>
            <tr>
                <th style="color:#fff">Text</th>
                <th style="color:#fff">Translation</th>
                <th style="color:#fff">Enhancement</th>
            </tr>
            </thead>
            <tbody>

            @foreach($c as $key=>$card)

                <tr>
                    <td style="color:#fff">{{$card->text1}} </td>
                    <td style="color:#fff">{{$card->text3}} </td>
                    <td style="color:#fff">{{$card->text2}} </td>
                    
                </tr>

            @endforeach
           
            </tbody>
        </table>
    
</font>
</div>
@endsection
