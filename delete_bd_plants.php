<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ./accueil.php");
    }
$id_del=$_POST["id"];

$dsn = "mysql:host=localhost;dbname=coin_vert";
$db = new PDO($dsn, "root", "");
$query =  $db->prepare("delete  from plants where id= :id");
$query->bindParam(":id",$id_del);

if ($query->execute()) {

    header("Location: page_user_plants.php");
}

?>