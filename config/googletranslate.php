<?php

return [
    /*
      |----------------------------------------------------------------------------------------------------
      | The ISO 639-1 code of the language in lowercase to which the text will be translated to by default.
      |----------------------------------------------------------------------------------------------------
      */
    'default_target_translation' => 'en',

    //'client_id'=>'103063836172133760517',
    //'service_account_name' => 'translationbetter@senior-project-288807.iam.gserviceaccount.com',
    /*
      |-------------------------------------------------------------------------------
      | Api Key generated within Google Cloud Dashboard.
      |
      | The process to get this file is documented in a step by step detailed manner
      | over here:
      | https://github.com/JoggApp/laravel-google-translate/blob/master/google.md
      |-------------------------------------------------------------------------------
      */
    'api_key' => env('AIzaSyCvVEvLN3cbWr07CXmHEY2dhF37guIg8Yo'),
    'key_file_path' => base_path('composer.json'),
];
