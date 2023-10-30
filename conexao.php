<?php
$username="root";
$password="1234";
$dbname="salao";
$localhost="localhost";
$port=3307;
try{
    $conexao = new PDO("mysql:host=$localhost;port=$port;dbname=$dbname", $username, $password);
}  catch(PDOException $e){
            echo 'ERROR: diga o erro '. $e->getMessage();
        }
?>