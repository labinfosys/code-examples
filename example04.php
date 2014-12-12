function foo()  
{                     // на новой строке  
    if ($maybe) {     // на той же строке  
        do_it_now();  
        again();  
    } else {  
        abort_mission();  
    }  
    finalize();  
}  
