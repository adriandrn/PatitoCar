<?php

session_start();

require_once "conn.php";

if(isset($_POST["acceder"])){

   $email = $_POST["email"]; 
   $pass = $_POST["pass"];

   $sql = "SELECT * FROM usuario WHERE email = '$email';";

   $cons = mysqli_query($conn, $sql);

   if($cons){

      $user = mysqli_fetch_assoc($cons);

      if (password_verify($pass, $user['password'])) {
         
         // echo "inicio exitoso";
         $_SESSION['usuario'] = $user;
         $_SESSION['exito'] = 'inicio exitoso';
         mysqli_close($conn);   
   
         header("Location:../home.php");

      }else {
         echo "fail";
      }
   }
}
