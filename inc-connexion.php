<?php
require("inc-config.php");
try{
    $dsn='mysql:host ='.HOST.'dbname='.BD;
    $idcon=new PDO($dsn,USER,PWD);
    $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}
catch(PDOExeption $exp){
    echo "erreur :".$exp->getMessage();
    exit();
   
}
