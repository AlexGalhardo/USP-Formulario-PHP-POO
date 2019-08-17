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


require_once "dadosFormulario.class.php";

$cadastro = new DadosFormulario();

/**
 * Pegue o ID do Dado da url para ser deletado
 */
if(!empty($_GET['id'])){

	$id = $_GET['id'];
	
	$cadastro->deleteDadoEndereco($id);
	
	header("Location: cadastrados.php");
}
header("Location: cadastrados.php");

?>