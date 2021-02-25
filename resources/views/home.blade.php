@extends('layouts.app')

@section('content')
<div class="container">
    
    <font color="white">
    <div>
        <h1 align="center" > WeTranslate </h1>
    </div>
    <br><br><br>
    <div>
   
        <h3>
            Welcome {{ $user->name }} to WeTranslate!
        </h3>
    </div>
    <br><br><br>
    <div>
            <a href="/history" style="color:#1fa2ff"><u>
                <h4 align="left">
                    View History
                </h4></u>
            </a>
            <br>
        </div>
        <br>
 
    <div id="content"></div>

    <form action="/card" method="post">
                <div class="card-body">
                    @csrf
                    <label>Your Text:</label>

                    <textarea class="form-control" name="text1" id = "text1" >{{ $c->text1 ?? '' }}</textarea>
                    <div class="language-picker js-language-picker">

                       
                        <label for="language-picker-select">Select your language</label>

                        <select name="language-picker-select" id="language-picker-select">
                          <option lang="de" value="de">Deutsch</option>
                          <option lang="en" value="en" selected>English</option>
                          <option lang="fr" value="fr">Français</option>
                          <option lang="it" value="it">Italiano</option>
                          <option lang="ar" value="ar">Arabic</option>
                          <option lang="af" value="af">Afrikaans</option>
                          <option lang="ga" value="ga">Irish</option>
                          <option lang="sq" value="sq">Albanian</option>
                          <option lang="ga" value="ga">Japanese</option>
                          <option lang="az" value="az">Azerbaijani</option>
                          <option lang="eu" value="eu">Basque</option>
                          <option lang="ko" value="ko">Korean</option>
                          <option lang="bn" value="bn">Bengali</option>
                          <option lang="be" value="be">Belarusian</option>
                          <option lang="lv" value="lv">Latvian</option>
                          <option lang="bg" value="bg">Bulgarian</option>
                          <option lang="lt" value="lt">Lithuanian</option>
                          <option lang="ca" value="ca">Catalan</option>
                          <option lang="mk" value="mk">Macedonian</option>
                          <option lang="zh-CN" value="zh-CN">Chinese Simplified</option>
                          <option lang="ms" value="ms">Malay</option>
                          <option lang="zh-TW" value="zh-TW">Chinese Traditional</option>
                          <option lang="mt" value="mt">Maltese</option>
                          <option lang="hr" value="hr">Croatian</option>
                          <option lang="no" value="no">Norwegian</option>
                          <option lang="cs" value="cs">Czech</option>
                          <option lang="fa" value="fa">Persian</option>
                          <option lang="da" value="da">Danish</option>
                          <option lang="pl" value="pl">Polish</option>
                          <option lang="nl" value="nl">Dutch</option>
                          <option lang="pt" value="pt">Portuguese</option>
                          <option lang="ro" value="ro">Romanian</option>
                          <option lang="eo" value="eo">Esperanto</option>
                          <option lang="ru" value="ru">Russian</option>
                          <option lang="et" value="et">Estonian</option>
                          <option lang="sr" value="sr">Serbian</option>
                          <option lang="tl" value="tl">Filipino</option>
                          <option lang="sk" value="sk">Slovak</option>
                          <option lang="fi" value="fi">Finnish</option>
                          <option lang="sl" value="sl">Slovenian</option>
                          <option lang="gl" value="gl">Galician</option>
                          <option lang="sw" value="sw">Swahili</option>
                          <option lang="ka" value="ka">Georgian</option>
                          <option lang="sv" value="sv">Swedish</option>
                          <option lang="ta" value="ta">Tamil</option>
                          <option lang="el" value="el">Greek</option>
                          <option lang="te" value="te">Telugu</option>
                          <option lang="gu" value="gu">Gujarati</option>
                          <option lang="th" value="th">Thai</option>
                          <option lang="ht" value="ht">Haitian Creole</option>
                          <option lang="tr" value="tr">Turkish</option>
                          <option lang="iw" value="iw">Hebrew</option>
                          <option lang="uk" value="uk">Ukrainian</option>
                          <option lang="hi" value="hi">Hindi</option>
                          <option lang="ur" value="ur">Urdu</option>
                          <option lang="hu" value="hu">Hungarian</option>
                          <option lang="vi" value="vi">Vietnamese</option>
                          <option lang="is" value="is">Icelandic</option>
                          <option lang="cy" value="cy">Welsh</option>
                          <option lang="id" value="id">Indonesian</option>
                          <option lang="yi" value="yi">Yiddish</option>

                        </select>
                     

                    </div>
                    <br>
                    <center>
                    <button type="button" onclick="f()" class="btn btn-primary">Translate</button></center>

                <br>
                <textarea class="form-control" name="text3"  id = "text3">{{ $translated ?? '' }}</textarea><br>
                    <center>
                    <button type="submit" name="enhance" class="btn btn-primary">Enhance</button>
                    </center>
                </div>
    </form>
    </font>

</div>



<script>

    function f() {
	    var request = new XMLHttpRequest();
	    request.open('POST', "https://translation.googleapis.com/language/translate/v2", true);
	    request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
	    request.setRequestHeader('Authorization', 'Bearer {{ $key }}');
        var text = document.getElementById("text1");
        var lang = document.getElementById("language-picker-select").value;
        
	    var data = JSON.stringify({"q": text.value, "target": lang});

	    request.send(data);

	    request.onreadystatechange = function () {
	        if (request.readyState === 4) {
        	    //console.log(request.responseText);
        	    var json = JSON.parse(request.responseText);
                 var text3 = document.getElementById("text3");
        	    text3.value = json.data.translations[0].translatedText;
	        }
	    };
    }
</script>

        
@endsection






