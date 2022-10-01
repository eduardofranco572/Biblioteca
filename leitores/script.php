<?php
	$id = isset($_GET['id'])? $_GET['id'] : "";
	$mysqli = new mysqli('localhost', 'root', '', 'biblioteca');
	$sql = "SELECT * FROM leitores WHERE id='".$id."';";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	header("Content-type:".$row['tipoImg']);
	echo $row['img'];

?>