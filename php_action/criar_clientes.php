<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {

		//sanitização
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$idade = mysqli_escape_string($connection,$_POST['idade']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$registro = mysqli_escape_string($connection,$_POST['registro']);
		$tutor = mysqli_escape_string($connection,$_POST['tutor']);

		$sql = "INSERT INTO tbPets(nomePet,racaPet,corPet,idadePet,sexoPet,registroPet,tutorPet)VALUES('$nome','$raca','$cor','$idade','$sexo','$registro','$tutor')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
