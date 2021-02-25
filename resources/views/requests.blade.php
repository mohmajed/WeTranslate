@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>
<font color="white">
    <div>
        <h1 align="center"> WeTranslate </h1>
        <h3 align="center"> Translator </h3>
    </div>
    <br><br><br>
      <div>
            <a href="/translator/{{ $user->id }}" style="color:#1fa2ff"><u>
                <h4 align="left">
                    Go Back
                </h4></u>
            </a>
            <br>
        </div>
        <p>Text</p>
    <table class="table table-hover" >
            <!--
            <thead>
            <tr>
                <th style="color:#fff">Text</th>
               
            </tr>
            </thead>
            -->
            <tbody>

            @foreach($c as $key=>$card)

                <tr>
                    <td style="color:#fff">{{$card->text1}} </td>
                    <td>
                        <button type="button" class="w3-button w3-green float-right" 
                                method="post"
                                onclick="window.location.href = '/cards/translate/{{$card->id}}'"><b>
                                Translate</b>
                        </button>
                    </td>

                </tr>

            @endforeach
           
            </tbody>
        </table>
    
    </font>
</div>
@endsection
