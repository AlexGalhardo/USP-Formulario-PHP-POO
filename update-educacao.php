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
	$info = $dados->getEducacaoCadastradosFromId($id);

} else {
	header("Location: index.php");
}
/**
 * Edite os data
 */
if(!empty($_POST['id']) && isset($_GET['id'])){
	
	echo "<div class='div-main'>";
	echo "<br><h1 style='text-align: center;'>Dados Educacao Atualizados</h1>";
	echo "<br><hr><strong>ID: </strong>" . $_POST['id'] . "<br>";
	echo "<br><hr><strong>Escolaridade: </strong>" . $_POST['escolaridade'] . "<br>";
	echo "<br><hr><strong>Ano Formacao: </strong>" . $_POST['anoFormacao'] . "<br>";
	echo "<br><hr><strong>Nome Instituição: </strong>" . $_POST['nomeInstituicao'] . "<br>";
	echo "<br><hr><strong>Nome Curso: </strong>" . $_POST['nomeCurso'] . "<br>";
	echo "</div>";
	
	$dados->updateDadosEducacao($_POST['id'],
	                            $_POST['escolaridade'],
	                            $_POST['anoFormacao'],
	                            $_POST['nomeInstituicao'],
	                            $_POST['nomeCurso']);
}

?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<title>UPDATE Dados Tabela Educação</title>
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
			<h1 style="text-align: center;">UPDATE Dados Tabela Educação</h1>
			<form method="POST">

				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<h3><strong>ID: </strong><?php echo $info['id']; ?></h3><br>

                <p><strong>Formação Acadêmica Cadastrado: <?php echo $info['escolaridade'];?></strong></p>
				<label>Formação Acadêmica</label><br>

					<input type="radio" name="escolaridade" value="Ensino Médio Incompleto" id="medio-incompleto" onclick="hiddenDivEducacao()">  Ensino Médio Incompleto <br>

					<input type="radio" name="escolaridade" value="Ensino Médio Completo" id="medio-completo" onclick="hiddenDivEducacao()">  Ensino Médio Completo<br>

					<input type="radio" name="escolaridade" value="Superior Incompleto" onclick="showDivEducacao()">  Superior Incompleto<br>

					<input type="radio" name="escolaridade" value="Cursando Ensino Superior" onclick="showDivEducacao()">  Cursando Ensino Superior<br>

					<input type="radio" name="escolaridade" value="Superior Completo" onclick="showDivEducacao()">  Superior Completo<br>

					<input type="radio" name="escolaridade" value="Mestrado" onclick="showDivEducacao()">  Mestrado</option><br>

					<input type="radio" name="escolaridade" value="Doutorado" onclick="showDivEducacao()">  Doutorado

					<br><br>

					<div id="div-educacao" hidden>

						<span id="errorNomeCurso"></span><br>
						<label>Nome do Curso: </label>
						<input type="text" placeholder="Digite o nome do curso" name="nomeCurso" id="nomeCurso" value="<?php echo $info['nomeCurso']; ?>"><br><br>

	                    <span id="errorNomeInstituicao"></span><br>
						<label>Nome da Instituição: </label>
						<input type="text" placeholder="Digite o nome da instituição" name="nomeInstituicao" id="nomeInstituicao" value="<?php echo $info['nomeInstituicao']; ?>"><br><br>

					</div>

					<br>

					<p><strong>Ano Formação Cadastrado: </strong><?php echo $info['anoFormacao']; ?></p>
					<label>Ano de Formação: </label>					
					<select name="anoFormacao" id="anoFormacao">
						<option value="2018">2023</option>
						<option value="2017">2022</option>
						<option value="2016">2021</option>
						<option value="2015">2020</option>
						<option value="2014">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>	
					</select>

					<br><br>

					<input type="submit" value="UPDATE Dados Educacão">

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