<?php
   $userEmail = $_POST['userEmail'];
   $userPassword = $_POST['userPassword']


   if(userEmail === '' ||$userPassword ===''){
    echo"um dos campos não foi preenchido corretamente,corrija-os"
   }
   else{
     $sql = "SELECT userEmail, userPassword FROM usuarios WHERE userEmail='userEmail' "
     $consulta =$conexao -> query($sql);
}


?>