<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$idade = mysqli_escape_string($connection,$_POST['idade']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$registro = mysqli_escape_string($connection,$_POST['registro']);
		$tutor = mysqli_escape_string($connection,$_POST['tutor']);
		$idPet = mysqli_escape_string($connection,$_POST['idPet']);

		$sql = "UPDATE tbPets SET nomePet = '$nome', racaPet = '$raca', corPet = '$cor', idadePet = '$idade', sexoPet = '$sexo', registroPet = '$registro', tutorPet = '$tutor'  WHERE idPet = '$idPet'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
