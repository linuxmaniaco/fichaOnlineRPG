<?php 

	require_once("config.php");

	// $sql = new Sql();
	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);


	$edu = new Usuario();
	$edu->loadById(3);

	echo $edu;
?>
