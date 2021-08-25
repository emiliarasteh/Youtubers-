<?php



 function getSetting($key)
{
    return \App\Models\Setting::where('key', $key)->first()->value;

}
