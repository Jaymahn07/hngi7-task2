<?php
            function greet_hng($name,$hng_id,$language,$email){
                
                $output = "Hello world, this is ".$name." with HNGi7 ID ".$hng_id." using "
                .$language." for stage 2 task email ".$email ;
                return $output;
            }
             
             echo  greet_hng("Owoeye Samuel","HNG-02249","PHP","Owoeye1321@gmail.com");


?>