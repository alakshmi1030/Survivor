<?php

/*  Function remove consists of two args. One is the integer array, the other is
 *  the token to control removal: 1--remove 0--not remove
 *  
 *  When there is only one element left in the array, then the survivor found
 * 
 *  Edited by Jiangyue Zhu
 */

function survivor($array,$rmToken){
       
    /**
    *  if only one left, return it. The survivor found!**/
    if(count($array) == 1){
        
        return $array;           
    }
    

     foreach($array as $key => $element){        
      /**
       * token equals to 1
       * Remove current element from array
       * set token to 0, continue loop
       */
      if($rmToken){                     
        
            unset($array[$key]);        
          
            $rmToken = 0;                   
        
         }
     
         /** 
          * token equals to 0
          * skip this element
          * set token to 1, continue loop **/
      else {                      
                                
        $rmToken = 1;             
             
        }
       
      }// end foreach
      
      
    return survivor($array,$rmToken);       //recursive 
    
}


// create an array containing a range of elements, from 1 to 100. 
    $arr = range(1,100);  

    $result = survivor($arr,1); //call survivor function, return result

    echo "The survivor is sitting on #".array_pop($result);
   // print_r($result);          

?>
