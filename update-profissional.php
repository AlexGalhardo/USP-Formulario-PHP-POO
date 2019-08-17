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
	$info = $dados->getExperienciaProfissionaiFromId($id);
	//print_r($info);

} else {
	header("Location: cadastrados.php");
}
/**
 * Edite os data
 */
if(!empty($_POST['id']) && isset($_GET['id'])){
	
	echo "<div class='div-main'>";
	echo "<br><h1 style='text-align: center;'>Dados Experiencia Profissional Atualizados</h1>";
	echo "<br><hr><strong>ID: </strong>" . $_POST['id'] . "<br>";
	echo "<br><hr><strong>Possui Experiencia: </strong>" . $_POST['possuiExperiencia'] . "<br>";
	echo "<br><hr><strong>Nome da Empresa: </strong>" . $_POST['nomeEmpresa'] . "<br>";
	echo "<br><hr><strong>Inicio Mes: </strong>" . $_POST['inicioMes'] . "<br>";
	echo "<br><hr><strong>Inicio Ano: </strong>" . $_POST['inicioAno'] . "<br>";
	echo "<br><hr><strong>Fim Mes: </strong>" . $_POST['fimMes'] . "<br>";
	echo "<br><hr><strong>Fim Ano: </strong>" . $_POST['fimAno'] . "<br>";
	echo "<br><hr><strong>Segmento da Empresa: </strong>" . $_POST['segmentoDaEmpresa'] . "<br>";
	echo "<br><hr><strong>Cargo que Ocupou: </strong>" . $_POST['cargoQueOcupou'] . "<br>";
	echo "<br><hr><strong>Texto Responsabilidades: </strong>" . $_POST['textoResponsabilidades'] . "<br>";
	echo "</div>";
	
	$dados->updateDadosExperienciasProfissionais($_POST['id'],
					                            $_POST['possuiExperiencia'],
					                            $_POST['nomeEmpresa'],
					                            $_POST['inicioMes'],
					                            $_POST['inicioAno'],
												$_POST['fimMes'],
					                            $_POST['fimAno'],
					                            $_POST['segmentoDaEmpresa'],
					                            $_POST['cargoQueOcupou'],
												$_POST['textoResponsabilidades']);
}

?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8">
		<title>UPDATE Dados Tabela Experiencia Profissional</title>
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

			<h1 style="text-align: center;">UPDATE Dados Tabela Experiencia Profissional</h1>

			<form method="POST">

				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<h3><strong>ID: </strong><?php echo $info['id']; ?></h3><br>

                <p><strong>Cadastrado: </strong><?php echo $info['possuiExperiencia']; ?></p>

				<input type="radio" name="possuiExperiencia" value="Possui Experiência Profissional" id="possuiExperienciaProfissional" onclick="showAdicionarEmpresa()">Possui Experiência Profissional
				<input type="radio" name="possuiExperiencia" value="Não Possui Experiência Profissional" checked onclick="hiddenAdicionarEmpresa()">Não Possui Experiência Profissional

				<div id="button-adicionar-exp" hidden>
					<br><br>
					<input onclick="showAdicionarDadosEmpresa()" type="button" value="Adicionar dados da última experiência"></input>
				</div>
				
				
				<div id="div-ultima-exp" hidden>
					<br><br>
					<hr>
					<span id="errorNomedaEmpresa"></span><br>
					<label>Nome da Empresa:</label>
					<input type="text" placeholder="Nome da empresa" id="nomeEmpresa" name="nomeEmpresa" value="<?php echo $info['nomeEmpresa']; ?>">
					<br><br>

                    <p><strong>Datas Cadastradas: </strong>Inicio: <?php echo $info['inicioMes']; ?> / <?php echo $info['inicioAno']; ?>    |    Fim: <?php echo $info['fimMes']; ?> / <?php echo $info['fimAno']; ?></p>
					<strong>Inicio:</strong> Mês: 
					<select name="inicioMes">
						<option value="Janeiro">Janeiro</option>
						<option value="Feveiro">Feveiro</option>
						<option value="Março">Março</option>
						<option value="Abril">Abril</option>
						<option value="Maio">Maio</option>
						<option value="Junho">Junho</option>
						<option value="Julho">Julho</option>
						<option value="Agosto">Agosto</option>
						<option value="Setembro">Setembro</option>
						<option value="Outubro">Outubro</option>
						<option value="Novembro">Novembro</option>
						<option value="Dezembro">Dezembro</option>	
					</select>
					Ano:
					<select name="inicioAno">
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
					<label> <br><br>
					<strong>Fim:</strong>
					<select name="fimMes">
						<option value="Janeiro">Janeiro</option>
						<option value="Feveiro">Feveiro</option>
						<option value="Março">Março</option>
						<option value="Abril">Abril</option>
						<option value="Maio">Maio</option>
						<option value="Junho">Junho</option>
						<option value="Julho">Julho</option>
						<option value="Agosto">Agosto</option>
						<option value="Setembro">Setembro</option>
						<option value="Outubro">Outubro</option>
						<option value="Novembro">Novembro</option>
						<option value="Dezembro">Dezembro</option>		
					</select>
					Ano:
					<select name="fimAno">
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
					<p><strong>Segmento Cadastrado: </strong><?php echo $info['segmentoDaEmpresa']; ?></p>
					<label>Segmento</label>:<br>
					<input type="radio" value="Tecnologia e Informática" name="segmentoDaEmpresa">  Tecnologia e Informática <br>
					<input type="radio" value="Recursos Humanos" name="segmentoDaEmpresa">  Recursos Humanos <br>
					<input type="radio" value="Varejo de Produtos Físicos" name="segmentoDaEmpresa">  Varejo de Produtos Físicos <br>
					<input type="radio" value="Marketing Digital" name="segmentoDaEmpresa">  Marketing Digital <br>
					<input type="radio" value="Comercio" name="segmentoDaEmpresa">  Comercio <br>
					<input type="radio" value="Entretenimento" name="segmentoDaEmpresa">  Entretenimento <br>
					<input type="radio" value="Serviços" name="segmentoDaEmpresa">  Serviços 

					<br><br>
					<span id="errorCargoQueOcupou"></span><br>
					<label>Cargo que ocupou:</label>
					<input type="text" placeholder="Digite o cargo que ocupou" id="cargoOcupou" name="cargoQueOcupou" value="<?php echo $info['cargoQueOcupou']; ?>"><br><br>

					<span id="errorResponsabilidades"></span><br>
					<label>Digite suas principais atribuições e responsabilidades no cargo exercido: </label><br>
					<textarea rows="10" cols="70" id="responsabilidadesCargo" name="textoResponsabilidades"><?php echo $info['textoResponsabilidades']; ?></textarea>
					<br><br>
					<input type="submit" onclick="hiddenAdicionarDadosEmpresa()" value="Deletar Dados">
					<hr>
					</div>

				<br><br>

			    <input type="submit" value="UPDATE Dados Educacão">
				
				<br><br>
			    <h3><a href="cadastrados.php">Voltar</a></h3>

			    <br><br>
				<h4 style="text-align: center;">© 2018 <a href="https://galhardoo.com">Alex Galhardo</a> - ICMC USP 2018</h4>
				<br><br>

			</form>

		</div>

	</body>

</html>