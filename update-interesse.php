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
	$info = $dados->getInteresseDeVagaCadastradoFromId($id);

} else {
	header("Location: cadastrados.php");
}
/**
 * Edite os data
 */
if(!empty($_POST['id']) && isset($_GET['id'])){
	
	echo "<div class='div-main'>";
	echo "<br><h1 style='text-align: center;'>Dados Pessoais Atualizados</h1>";
	echo "<br><hr><strong>ID: </strong>" . $_POST['id'] . "<br>";
	echo "<br><hr><strong>Cargo: </strong>" . $_POST['cargo'] . "<br>";
	echo "<br><hr><strong>Experiencia: </strong>" . $_POST['experiencia'] . "<br>";
	echo "<br><hr><strong>Regiao Interesse: </strong>" . $_POST['regiaoInteresse'] . "<br>";
	echo "<br><hr><strong>Pretensão Salarial: </strong>" . $_POST['pretensaoSalarial'] . "<br>";
	echo "</div>";
	
	$dados->updateDadosInteresseDeVagaCadastrado($_POST['id'],
					                             $_POST['cargo'],
					                             $_POST['experiencia'],
					                             $_POST['regiaoInteresse'],
					                             $_POST['pretensaoSalarial']);

}

?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<title>UPDATE Dados Tabela Interesse Vaga</title>
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

			<h1 style="text-align: center;">UPDATE Dados Tabela Interesse Vaga</h1>

			<form method="POST">

				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<h3><strong>ID: </strong><?php echo $info['id']; ?></h3><br>

				<p><strong>Cargo Cadastrado: </strong><?php echo $info['cargo']; ?></p>
				<label><strong>Cargo</strong></label>
				<br>
				<input type="radio" value="Desenvolver Front-End" name="cargo" checked>
				 Desenvolver Front-End<br>
				<input type="radio" value="Desenvolver Back-End" name="cargo">
				 Desenvolver Back-End<br>
				<input type="radio" value="Administrador Banco de Dados" name="cargo">
				 Administrador Banco de Dados<br>
				<input type="radio" value="Analista Marketing Digital" name="cargo">
				 Analista Marketing Digital<br>
				 <input type="radio" value="Design" name="cargo">
				 Design<br>
				<input type="radio" value="Recursos Humanos" name="cargo">
				 Recursos Humanos<br>
				<input type="radio" value="Administrativo Financeiro" name="cargo">
				 Administrativo Financeiro<br>
				<br><br>

				<p><strong>Experiência Cadastrado: </strong><?php echo $info['experiencia']; ?></p>
				<label>Experiência no Cargo: </label>
				<br>
				<input type="radio" name="experiencia" value="Júnior" checked> Júnior<br>
				<input type="radio" name="experiencia" value="Pleno"> Pleno<br>
				<input type="radio" name="experiencia" value="Sênior"> Sênior<br>
				<input type="radio" name="experiencia" value="Mestre Yoda">  Mestre Yoda<br>
				<br><br>

                <p><strong>Região Cadastrado: </strong><?php echo $info['regiaoInteresse']; ?></p>
				<label for="regiao-interesse">Região de Interesse:  </label>
				<select name="regiaoInteresse">
					<option value="SP">SP</option>
					<option value="RJ">RJ</option>
					<option value="MG">MG</option>
					<option value="PR">PR</option>
					<option value="SC">SC</option>
					<option value="AC">AC</option>
					<option value="AM">AM</option>
					<option value="RS">RS</option>
				</select>
				<br><br>

                <p><strong>Pretensão Salarial Cadastrado: </strong><?php echo $info['pretensaoSalarial']; ?></p>
				<label for="pretensaoSalarial">Pretensão Salarial: R$
				<input name="pretensaoSalarial" id="pretensaoSalarial" type="number"> / mês
				<br><br>

				<input type="submit" value="UPDATE Dados Interesse Vaga">

				<br><br>
			    <h3><a href="cadastrados.php">Voltar</a></h3>

			    <br><br>
				<h4 style="text-align: center;">© 2018 <a href="https://galhardoo.com">Alex Galhardo</a> - ICMC USP 2018</h4>
				<br><br>

			</form>

		</div>

	</body>

</html>