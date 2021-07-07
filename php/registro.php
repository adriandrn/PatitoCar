<?php

require_once "conn.php";

echo "hola";

if(isset($_POST["registro"])){
   $nom  = $_POST["nombres"];
   $ape  = $_POST["apellidos"];
   $ci   = $_POST["ci"];
   $cell = $_POST["telf"];
   $dir  = $_POST["direccion"];
   $email = $_POST["email"];
   $pass = $_POST["pass"];

   $secpass = password_hash($pass,PASSWORD_BCRYPT,["cost"=>4]);

   $sql ="insert into usuario values('$ci','$nom','$ape','$cell','$dir','$email','$secpass','user')";

   $res = mysqli_query($conn, $sql);

   if($res){
      echo "exito";
   }else{
      echo "fallo";
   }

   mysqli_close($conn);   
   
   header("Location:../index.php");
}

?>