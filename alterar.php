<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbPets WHERE idPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light center-align">ALTERAR DADOS DO PET</h3>
			
			<form action="php_action/alterar_clientes.php" method="POST">

				<input type="hidden" name = "idPet" value="<?php echo $dados['idPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nomePet']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca" value="<?php echo $dados['racaPet']; ?>"
					>
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cor" id="cor" value="<?php echo $dados['corPet']; ?>">
					<label for="cor">Cor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="idade" id="idade" value="<?php echo $dados['idadePet']; ?>">
					<label for="idade">Idade</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="sexo" id="sexo" value="<?php echo $dados['sexoPet']; ?>">
					<label for="sexo">Sexo</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="registro" id="registro" value="<?php echo $dados['registroPet']; ?>">
					<label for="registro">Registro</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="tutor" id="tutor" value="<?php echo $dados['tutorPet']; ?>">
					<label for="tutor">Tutor</label>
				</div>


				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de clientes</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>