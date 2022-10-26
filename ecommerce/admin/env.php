<?php
// PDO 
// PHP Data Object 

try{
    $db = 'mysql:host=localhost;dbname=ecommerce' ;
    $user = 'root' ;
    $pass = '' ;
    $con = new PDO($db , $user, $pass);
    // echo "connect" ;
    
}catch(PDOException $e){
    echo $e->getMessage() ;
}