<?php

    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'HMVG';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

   // if($conexao->connect_errno)
   // {
   //     echo "erro";
   // }
   // else 
   // {
   //     echo "Conexao efetuada";
   // }

?>