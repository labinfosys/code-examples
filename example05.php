<?php
// получаем код страны
$country_code = get_country_code($_SERVER['REMOTE_ADDR']);  
  
// если страна US  
if ($country_code == 'US') {  
  
    // отобразить форму
    echo form_input_state();  
}  
