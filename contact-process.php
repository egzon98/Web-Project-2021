<?php require 'includes/connect.php';

	$emri = $_POST['emri'];
	$imella = $_POST['imella'];
	$vendi = $_POST['vendi'];
	$teksti = $_POST['teksti'];

	if(!empty($emri) || !empty($imella) || !empty($vendi) || !empty($teksti)){

		$INSERT = 'INSERT Into questions (emri, imella, vendi, teksti) VALUES (:emri, :imella, :vendi, :teksti)'; 

		$query = $pdo->prepare($INSERT);
		$query->bindParam('emri', $emri);
		$query->bindParam('imella', $imella);
		$query->bindParam('vendi', $vendi);
		$query->bindParam('teksti', $teksti);
		$query->execute();

		header('Location: Index.php');

		$query->close();

	}


?>

