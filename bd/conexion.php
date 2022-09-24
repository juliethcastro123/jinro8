z<?php  
   function conectar2(){
      try {
         $user="upu5kzlzdh69shoj";
         $passw="3XtTWDcbQ6ZfszxwzMVt";        
         $mbd = new PDO("mysql:host=bbghnnhp4c9zepkemffp-mysql.services.clever-cloud.com; dbname=bbghnnhp4c9zepkemffp", $user, $passw); 
      } catch (PDOException $e) {            
         die("¡Error!: " . $e->getMessage());
      }
      return $mbd ;
   };  
   function conectar1(){
      try {
         $user="root";
         $passw="";        
         $mbd = new PDO("mysql:host=localhost; dbname=proyecto", $user, $passw); 
      } catch (PDOException $e) {            
         die("¡Error!: " . $e->getMessage());
      }
      return $mbd ;
   };  
?>
