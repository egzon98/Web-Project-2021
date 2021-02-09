<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=albaniatourism", "root", "");
}catch(PDOException $pdo){
	die("Lidhja me DB - Deshtoi!");
}



?>