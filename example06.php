<?php
// получить список форумов
$forums = array();  
$r = mysql_query("SELECT id, name, description FROM forums");  
while ($d = mysql_fetch_assoc($r)) {  
    $forums []= $d;  
}  
  
// загрузить шаблон
load_template('header');  
load_template('forum_list',$forums);  
load_template('footer');  
