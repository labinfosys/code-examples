<?php
// плохо
$my_email->set_from('test@email.com')->add_to('programming@gmail.com')->set_subject('Methods Chained')->set_body('Some long message')->send();  
  
// хорошо
$my_email  
    ->set_from('test@email.com')  
    ->add_to('programming@gmail.com')  
    ->set_subject('Methods Chained')  
    ->set_body('Some long message')  
    ->send();  
  
// плохо
$query = "SELECT id, username, first_name, last_name, status FROM users LEFT JOIN user_posts USING(users.id, user_posts.user_id) WHERE post_id = '123'";  

// плохо 
$query = "SELECT id, username, first_name, last_name, status 
    FROM users 
    LEFT JOIN user_posts USING(users.id, user_posts.user_id) 
    WHERE post_id = '123'";
