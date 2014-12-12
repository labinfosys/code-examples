<?php
function do_stuff() {  
  
// ...  
  
    if (is_writable($folder)) {  
  
        if ($fp = fopen($file_path,'w')) {  
  
            if ($stuff = get_some_stuff()) {  
  
                if (fwrite($fp,$stuff)) {  
  
                    // ...  
  
                } else {  
                    return false;  
                }  
            } else {  
                return false;  
            }  
        } else {  
            return false;  
        }  
    } else {  
        return false;  
    }  
}  

function do_stuff2() {  
  
// ...  
  
    if (!is_writable($folder)) {  
        return false;  
    }  
  
    if (!$fp = fopen($file_path,'w')) {  
        return false;  
    }  
  
    if (!$stuff = get_some_stuff()) {  
        return false;  
    }  
  
    if (fwrite($fp,$stuff)) {  
        // ...  
    } else {  
        return false;  
    }  
}  
