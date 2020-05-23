<?php

     setcookie('usuario','01', time() + (2 *3600));
     
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