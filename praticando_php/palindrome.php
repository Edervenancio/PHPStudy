<?php
 
 

    

    function isPalindrome($x){
 
        $y = [];
        $x  =  str_split($x);
        


        if($x[0] == $[1] || count($x) == 1){
            return true;
        }

        if($x[0] == $x[2] ){  
            $x = implode("",$x);
            $x = intval($x);
            return true;
        } else {
            $x = implode("",$x);
            $x = intval($x);
            return false;
        }
    }        
    $x = 0;
    echo isPalindrome($x);


    
    
  
    
   
   
   
  

    

   




