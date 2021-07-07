<?php

require("conn.php");
session_start();
if (isset($_GET["id"])) {
   $sql = "DELETE FROM usuario WHERE ci = '{$_GET["id"]}';";

   $query = mysqli_query($conn,$sql);

   header("Location:../admin.php");

   // if ($query ) {
   //    $_SESSION["alerta"] = "Borrado con exito";
   // }else{
   //    $_SESSION["alerta"] = "No se pudo borrar";
   // }
}else{
   header("Location:../index.php");
}

?>