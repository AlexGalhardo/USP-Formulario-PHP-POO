<?php

/**
 * Projeto Desenvolvido para a Atividade 1 - Formulário de Cadastro
 *
 * Curso Sistemas Interativos WEB
 *
 * Prof. Rudinei Goularte (rudinei@icmc.usp.br)
 *
 * ICMC USP 2018
 *
 * Preview Project: https://forms.galhardoo.com
 *
 * Source Code: https://github.com/AlexGalhardo/Trabalho-Formulario
 *
 * Alex Galhardo Vieira
 * Github: https://github.com/AlexGalhardo	
 * Email: aleexgvieira@gmail.com / alexgalhardo@usp.br
 * Site: https://galhardoo.com
 */

/**
 * Inclua uma vez o arquivo da classe data
 */
require_once 'dadosFormulario.class.php';

$dados = new DadosFormulario();

if(!empty($_GET['id']) && isset($_GET['id'])){

	$id = $_GET['id'];

	/**
	 * Traz os dados deste ID da tabela Enderecos em formato de array
	 */
	$info = $dados->getDadosEnderecoCadastradosFromId($id);

} else {
	header("Location: index.php");
}
/**
 * Edite os data
 */
if(!empty($_POST['rua']) && isset($_POST['bairro'])){

	echo "<div class='div-main'>";
	echo "<br><h1 style='text-align: center;'>Dados Endereco Atualizados</h1>";
	echo "<br><hr><strong>ID: </strong>" . $_POST['id'] . "<br>";
	echo "<br><hr><strong>Rua: </strong>" . $_POST['rua'] . "<br>";
	echo "<br><hr><strong>Bairro: </strong>" . $_POST['bairro'] . "<br>";
	echo "<br><hr><strong>Numero Residencia: </strong>" . $_POST['numeroResidencia'] . "<br>";
	echo "</div>";
	
	$dados->updateDadosEndereco($_POST['id'],
	                            $_POST['rua'],
	                            $_POST['bairro'],
	                            $_POST['numeroResidencia']);
	
}
?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<title>UPDATE Dados Tabela Endereço</title>
		<meta name=description content="Projeto realizado durante o curso de Sistemas Interativos WEB - USP 2018">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<script src="main.js"></script>
		<style>
			span {
				color: red;
			}
			.div-main {
				max-width: 700px; 
				margin: 0 auto;
			}
		</style>
	</head>

	<body>
		
		<div class="div-main">

			<h1 style="text-align: center;">UPDATE Dados Tabela Endereço</h1>

			<form method="POST">

				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<h3><strong>ID: </strong><?php echo $info['id']; ?></h3><br>

				<label for="endereco">Rua: </label>
				<input type="text" name="rua" id="endereo" value="<?php echo $info['rua'];?>" placeholder="Insira apenas o nome da rua"><br><br>

				<label for="bairro">Bairro: </label>
				<input type="text" name="bairro" id="bairro" placeholder="Digite o nome do seu bairro" value="<?php echo $info['bairro']; ?>"><br><br>

				<label for="numero-residencia">Número Residência: </label>
				<input type="number" value="<?php echo $info['numeroResidencia'];?>" name="numeroResidencia" id="numero-residencia" placeholder="Digite o update da residencia">
				
				<br><br>

				<input type="submit" value="UPDATE Dados Endereco">

				<br><br>
			    <h3><a href="cadastrados.php">Voltar</a></h3>
			    <br><br>

			    <br><br>
				<h4 style="text-align: center;">© 2018 <a href="https://galhardoo.com">Alex Galhardo</a> - ICMC USP 2018</h4>
				<br><br>

			</form>

		</div>

	</body>

</html>