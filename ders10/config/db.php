<?php 
    
    $host ="localhost";
    $username="root";
    $password="root";
    $database="site";

    try 
    {
        $db=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$username,$password);

    } catch (PDOException $err) 
    {
       echo $err->getMessage();
    }

    


?>