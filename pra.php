<?php

function pra(){
     $numargs = func_num_args();
     if ($numargs > 0) {
         $arg_list = func_get_args();    
         foreach($arg_list as $arg) {        
		echo "<pre>";
		print_r($arg);
		echo "</pre>";
         }
     }   
}
?>
