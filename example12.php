<?php
// $i для циклов  
for ($i = 0; $i < 100; $i++) {  
  
    // $j для вложенных циклов  
    for ($j = 0; $j < 100; $j++) {  
  
    }  
}  
  
// $ret для возвращаемых переменных  
function foo() {  
    $ret['bar'] = get_bar();  
    $ret['stuff'] = get_stuff();  
  
    return $ret;  
}  
  
// $k и $v для foreach  
foreach ($some_array as $k => $v) {  
  
}  
  
// $q, $r и $d для mysql  
$q = "SELECT * FROM table";  
$r = mysql_query($q);  
while ($d = mysql_fetch_assocr($r)) {  
  
}  
  
// $fp для работы с файлами  
$fp = fopen('file.txt','w');  
