<?php
     
    ini_set('session.gc_maxlifetime', 180);


      session_set_cookie_params(180);

      session_start(); 

      $now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    session_unset();
    session_destroy();
    session_start();
}

$_SESSION['discard_after'] = $now + 180;


       function buscaUsuario($conexao,$email,$senha)
       {
       $senhaMd5 = md5($senha);

       $query = "SELECT *
                   FROM  USUARIO
                   WHERE EMAIL = '{$email}'
                    AND  SENHA = '{$senhaMd5}'";
       $resultado = mysqli_query($conexao,$query);
       
       $usuario =  mysqli_fetch_assoc($resultado);
       
        return $usuario;
       }

 ?>      