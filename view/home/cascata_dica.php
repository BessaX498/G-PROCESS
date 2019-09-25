<div data-role="page" id="cascata_dica" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#iniciar_projetos" class="ui-btn-active">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<h1 style="text-align: center">Conceito</h1>
		<h2 style="padding: 5px">O que é esta fase?</h2>
		<p style="padding: 10px";>Inicio de tudo e nascimento da ideia principal. Geralmente são equipes pequenas com a função de transmitir 
		a ideia do projeto para as outras equipes.</p>
		<h2 style="padding: 5px">Missões:</h2>
		<div data-role="content" data-theme="b" style="border: solid 1px; margin: 10px">
			<h3 style="padding: 10px">Brainstorm.</h3>
			<h4 style="padding-left: 20px"><a href="#"> Termo de Abertura:</a></h4>
			<ul>
				<li>Descrição da oportunidade a ser aproveitada ou do objetivo;</li>
				<li>Descrição resumida do projeto;</li>
				<li>Restrições;</li>
				<li>Premissas;</li>
				<li>Estudos preliminares;</li>
				<li>Participantes;</li>
			</ul>
			<h4 style="padding-left: 20px"><a href="#" >Termo de Desenvolvimento:</a></h4>
			<ul>
				<li>Estrutura analitica do projeto(EAP);</li>
				<li>Organograma;</li>
				<li>Matriz de responsabilidade;</li>
				<li>Cronograma;</li>
			</ul>
		</div>
		<h1 style="text-align: center;">Pré-Produção</h1>
		<h2 style="padding: 5px;">O que é esta fase?</h2>
		<p style="padding: 10px";>Esta é a de planejamento do projeto. São criados documento que auxiliam artistas e produtores.
		A mesma pode terminar com a criação da Game desing document(GDD).</p>
		<h2 style="padding: 5px">Missões:</h2>
		<div data-role="content" data-theme="b" style="border: solid 1px; margin: 10px"><h4 style="padding-left: 20px">Documento UML:</h4>
			<ul>
				<li>Caso de uso;</li>
				<li>Diagrama de classes;</li>
				<li>Diagrama de atividades;</li>
				<li>Diagrama de maquina de estados;</li>
				<li>Diagrama de sequência;</li>
				<li>GDD;</li>
			</ul>
		</div>
		<h1 style="padding: 5px">Protótipo</h1>
		<p style="padding: 10px">Ilustrativo(telas), simulado(acesso ao bando de dados é simulado), funcional(subconunto limitado) e evolucionário(começa pequeno e cresce).</p>

	</main>

	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>

</div>