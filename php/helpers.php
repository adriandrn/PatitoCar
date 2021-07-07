<?php


function get_user($conn){
   $sql = "SELECT * FROM usuario;";
 

   $query = mysqli_query($conn ,$sql);

   $res = "";

   if ($query) {
      $res = $query;
   }

   return($res);
}

function pass($str){
   $strr = "";
   for ($i=0; $i < strlen($str); $i++) { 
      $strr.="*";
   }
   return($strr);
}

?>