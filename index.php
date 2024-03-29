<!--
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
-->



<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Cadastro De Currículos Profissionais</title>
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

		<header style="text-align: center;">
			<h1>Bem Vindo Candidato!</h1>
			<h3>Por Favor Insira Seus Dados</h3>
			<h5>Versão 2.0</h5>
		</header>



		<!--
   		Dados pessoais – campo obrigatório
		o Data de nascimento
		o Gênero
		o Estado Civil
		o País de Nacionalidade
		o Documento (CPF)
		o Endereço
		o E-mail
		o Celular
		-->
		<div class="div-main">

			<div id="dadosInseridos" hidden>
				<hr>
				<h2 style="text-align: center;">Dados Cadastrados No Formulário</h2>
				<h4 style="text-align: center;">Recarregue a Página para Resetar os dados</h4>
			</div>

			<h4>Dados Pessoa</h4>

			<form method="POST" action="cadastrados.php">

				<fieldset>

					<span id="errorNome"></span><br>
					<label for="nome-completo">Nome: </label>
					<input type="text" id="nomeCompleto" name="nome" placeholder="Pelo menos 8 caracteres">
					<br><br>

					<span id="errorEmail"></span><br>
					<label for="email">Email: </label><input name="email" type="email" placeholder="Digite seu email" id="email"><br><br>

					<span id="errorCelular"></span><br>
					<label for="celular">Celular: </label><input name="celular" type="number" placeholder="Digite o número do seu celular" id="celular"><br><br>

                    <span id="errorGenero"></span><br>
					<label>Gênero:</label><br>
					<input type="radio" name="genero" value="Masculino"> Masculino<br>
					<input type="radio" name="genero" value="Feminino"> Feminino<br>
					<input type="radio" name="genero" value="Outro"> Outro
					<br><br>

					<label>Estado Civil:</label>
					<select name="estadoCivil" id="estadoCivil">
						<option  value="Solteiro">Solteiro</option>
						<option  value="Casado">Casado</option>
						<option  value="Divorciado">Divorciado</option>
						<option  value="Namorando">Namorando</option>
						<option  value="Viúvo(a)">Viúvo(a)</option>
					</select>
					<br><br>

					<label>Nacionalidade:</label>
					<select name="nacionalidade" id="nacionalidade">
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
					<input type="number" name="cpf" placeholder="Insira seu CPF digitando apenas números" id="cpf" max="">
				</fieldset>

				<br>

				<h4>Dados de Endereço</h4>
				<fieldset>
					<label for="endereco">Rua: </label>
					<input type="text" name="rua" id="rua" placeholder="Insira apenas o nome da rua"><br><br>
					<label for="bairro">Bairro: </label>
					<input type="text" name="bairro" id="bairro" placeholder="Digite o nome do seu bairro"><br><br>
					<label for="numero-residencia">Número Residência: </label>
					<input type="number" name="numeroResidencia" id="numeroResidencia" placeholder="Digite o número da sua residencia">
				</fieldset>

				<br>

				<!--
				Objetivos
				o Objetivo profissional (cargo, nível e atividade desejada. Por exemplo, Analista de Sistemas Sênior, responsável pela produção de software) - obrigatório
				o Região de interesse (País, cidade e estado) - opcional
				o Pretensão Salarial - opcional
				-->
				<h4>Interesse de Vaga</h4>

				<fieldset>

                    <span id="errorCargo"></span><br>

					<label><strong>Cargo</strong></label>
					<br>
					<input type="radio" value="Desenvolver Front-End" name="cargo">
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

                    <span id="errorExperiencia"></span><br>
					<label>Experiência no Cargo: </label>
					<br>
					<input type="radio" name="experiencia" value="Júnior"> Júnior<br>
					<input type="radio" name="experiencia" value="Pleno"> Pleno<br>
					<input type="radio" name="experiencia" value="Sênior"> Sênior<br>
					<input type="radio" name="experiencia" value="Mestre Yoda">  Mestre Yoda<br>
					<br><br>

					<label for="regiao-interesse">Região de Interesse:  </label>
					<select name="regiaoInteresse" id="regiaoInteresse">
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

                    <span id="errorPretensaoSalarial"></span><br>
					<label for="pretensaoSalarial">Pretensão Salarial: R$
					<input name="pretensaoSalarial" id="pretensaoSalarial" type="number"> / mês
				</fieldset>
					

				<br>
				<!--
				Formação acadêmica - obrigatório
				o Nível de Escolaridade
				-->
				<h4>Educação</h4>

				<fieldset id="fieldset-educacao">

					<span id="errorEducacao"></span><br>

					<label>Formação Acadêmica</label><br>

					<input type="radio" name="escolaridade" value="Ensino Médio Incompleto" id="medio-incompleto" onclick="hiddenDivEducacao()">  Ensino Médio Incompleto <br>

					<input type="radio" name="escolaridade" value="Ensino Médio Completo" id="medio-completo" onclick="hiddenDivEducacao()">  Ensino Médio Completo<br>

					<input type="radio" name="escolaridade" value="Superior Incompleto" onclick="showDivEducacao()">  Superior Incompleto<br>

					<input type="radio" name="escolaridade" value="Cursando Ensino Superior" onclick="showDivEducacao()">  Cursando Ensino Superior<br>

					<input type="radio" name="escolaridade" value="Superior Completo" onclick="showDivEducacao()">  Superior Completo<br>

					<input type="radio" name="escolaridade" value="Mestrado" onclick="showDivEducacao()">  Mestrado</option><br>

					<input type="radio" name="escolaridade" value="Doutroado" onclick="showDivEducacao()">  Doutorado

					<br><br>

					<div id="div-educacao" hidden>

						<span id="errorNomeCurso"></span><br>
						<label>Nome do Curso: </label>
						<input type="text" placeholder="Digite o nome do curso" name="nomeCurso" id="nomeCurso"><br><br>

	                    <span id="errorNomeInstituicao"></span><br>
						<label>Nome da Instituição: </label>
						<input type="text" placeholder="Digite o nome da instituição" name="nomeInstituicao" id="nomeInstituicao"><br><br>

					</div>

					<span id="errorAnoFormacao"></span>
					<br>
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

				</fieldset>

				<br>

				<h4>Experiências Profissionais</h4>
				<fieldset id="fieldset-exp-profissional">
					<!--
					Resumo profissional (Resumo de suas qualificações, habilidades e realizações profissionais) -
					obrigatório
					Histórico profissional - obrigatório
					o Adicionar empresa
					 Nome da Empresa
					 Nacionalidade
					 País
					 Segmento (Por exemplo, Tecnologia e Informática)
					 Início (Data de início do contrato de trabalho)
					 Término (Data de término do contrato de trabalho ou se for o emprego atual o
					campo término pode ficar em branco)
					 Último cargo (Ex: Analista de Sistemas Web)
					 Descrição (Informação complementar das atividades desenvolvidas)
					o Não tem experiência profissional
					-->
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
						<input type="text" placeholder="Nome da empresa" id="nomeEmpresa" name="nomeEmpresa">
						<br><br>

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
						<label>Segmento</label>:<br>
						<input type="radio" value="Tecnologia e Informática" name="segmentoDaEmpresa" checked>  Tecnologia e Informática <br>
						<input type="radio" value="Recursos Humanos" name="segmentoDaEmpresa">  Recursos Humanos <br>
						<input type="radio" value="Varejo de Produtos Físicos" name="segmentoDaEmpresa">  Varejo de Produtos Físicos <br>
						<input type="radio" value="Marketing Digital" name="segmentoDaEmpresa">  Marketing Digital <br>
						<input type="radio" value="Comercio" name="segmentoEmpresa">  Comercio <br>
						<input type="radio" value="Entretenimento" name="segmentoDaEmpresa">  Entretenimento <br>
						<input type="radio" value="Serviços" name="segmentoDaEmpresa">  Serviços 

						<br><br>
						<span id="errorCargoQueOcupou"></span><br>
						<label>Cargo que ocupou:</label>
						<input type="text" placeholder="Digite o cargo que ocupou" id="cargoOcupou" name="cargoQueOcupou"><br><br>

						<span id="errorResponsabilidades"></span><br>
						<label>Digite suas principais atribuições e responsabilidades no cargo exercido: </label><br>
						<textarea rows="10" cols="70" id="responsabilidadesCargo" name="textoResponsabilidades"></textarea>
						<br><br>
						<input type="submit" onclick="hiddenAdicionarDadosEmpresa()" value="Deletar Dados">
						<hr>
					</div>

				</fieldset>
				
				<br><br>
				<input type="submit" value="Cadastrar Dados Com PHP"">

			</form>

            <br><br>
			<button onclick="cadastrarDados()">Verificar Dados com JavaScript</button>

			<br><br>
			<h3 style="text-align: center;"><a href="cadastrados.php">Ver Dados Cadastrados no Banco de Dados</a></h3>

			<!--</form>-->

			<br><br>
			<h4 style="text-align: center;">© 2018 <a href="https://galhardoo.com">Alex Galhardo</a> - ICMC USP 2018</h4>
			<br><br>

		</div>
	
		<script src="main.js"></script>
	</body>
</html>