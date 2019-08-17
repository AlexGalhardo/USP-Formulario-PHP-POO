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
	 * Traz os dados deste ID da tabela Educação em formato de array
	 */
	$info = $dados->getDadoPessoalCadastradoFromId($id);

} else {
	header("Location: index.php");
}
/**
 * Edite os data
 */
if(!empty($_POST['id']) && isset($_GET['id'])){
	
	echo "<div class='div-main'>";
	echo "<br><h1 style='text-align: center;'>Dados Pessoais Atualizados</h1>";
	echo "<br><hr><strong>ID: </strong>" . $_POST['id'] . "<br>";
	echo "<br><hr><strong>Nome: </strong>" . $_POST['nome'] . "<br>";
	echo "<br><hr><strong>Email: </strong>" . $_POST['email'] . "<br>";
	echo "<br><hr><strong>Celular: </strong>" . $_POST['celular'] . "<br>";
	echo "<br><hr><strong>Genero: </strong>" . $_POST['genero'] . "<br>";
	echo "<br><hr><strong>Estado Civil: </strong>" . $_POST['estadoCivil'] . "<br>";
	echo "<br><hr><strong>Nacionalidade: </strong>" . $_POST['nacionalidade'] . "<br>";
	echo "<br><hr><strong>CPF: </strong>" . $_POST['cpf'] . "<br>";
	echo "</div>";
	
	$dados->updateDadosPessoais($_POST['id'],
	                            $_POST['nome'],
	                            $_POST['email'],
	                            $_POST['celular'],
	                            $_POST['genero'],
	                            $_POST['estadoCivil'],
	                            $_POST['nacionalidade'],
	                            $_POST['cpf']);

}

?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<title>UPDATE Dados Tabela Dados Pessoais</title>
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

			<h1 style="text-align: center;">UPDATE Dados Tabela Dados Pessoais</h1>

			<form method="POST">

				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<h3><strong>ID: </strong><?php echo $info['id']; ?></h3><br>

				<label for="nome-completo">Nome: </label>
					<input type="text" id="nome-completo" name="nome" placeholder="Digite seu nome completo" value="<?php echo $info['nome']; ?>">
					<br><br>

					<span id="errorEmail"></span><br>
					<label for="email">Email: </label><input name="email" type="email" placeholder="Digite seu email" id="email" value="<?php echo $info['email']; ?>"><br><br>

					<span id="errorCelular"></span><br>
					<label for="celular">Celular: </label><input name="celular" type="number" placeholder="Digite o número do seu celular" id="celular" value="<?php echo $info['celular']; ?>"><br><br>

					<label>Gênero:</label><br>
					<p>Cadastrado: <?php echo $info['genero']; ?></p>
					<input type="radio" name="genero" value="Masculino"> Masculino<br>
					<input type="radio" name="genero" value="Feminino"> Feminino<br>
					<input type="radio" name="genero" value="Outro"> Outro
					<br><br>

					<label>Estado Civil:</label>
					<select name="estadoCivil">
						<option  value="Solteiro">Solteiro</option>
						<option  value="Casado">Casado</option>
						<option  value="Divorciado">Divorciado</option>
						<option  value="Namorando">Namorando</option>
						<option  value="Viúvo(a)">Viúvo(a)</option>
					</select>
					<br><br>

					<label>Nacionalidade:</label>
					<select name="nacionalidade">
						<option value="Brasileiro">Brasileiro</option>
						<option value="Americano">Americano</option>
						<option value="Espanhol">Espanhol</option>
						<option value="Ingles">Inglês</option>
						<option value="Argentino">Argentino</option>
						<option value="Mexicano">Mexicano</option>
						<option value="Russo">Russo</option>
						<option value="Indiano">Indiano</option>
						<option value="Frances">Frances</option>
						<option value="Italiano">Italiano</option>
						<option value="Alemao">Alemão</option>
						<option value="Canadense">Canadense</option>
					</select>
					<br><br>
					
					<span id="errorCPF"></span><br>
					<label for="cpf">CPF:</label>
					<input type="number" name="cpf" placeholder="Insira seu CPF digitando apenas números" id="cpf" max="" value="<?php echo $info['cpf']; ?>">
					<br><br>

					<input type="submit" value="UPDATE Dados Pessoais">

					<br><br>
				    <h3><a href="cadastrados.php">Voltar</a></h3>

				    <br><br>
					<h4 style="text-align: center;">© 2018 <a href="https://galhardoo.com">Alex Galhardo</a> - ICMC USP 2018</h4>
					<br><br>

			</form>

		</div>

	</body>

</html>