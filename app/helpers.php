<?php



 function getSetting($key, $real = 'no')
{
    if($real === 'no'){
        return strip_tags( \App\Models\Setting::where('key', $key)->first()->value );
    }else{
        return \App\Models\Setting::where('key', $key)->first()->value;
    }

}
