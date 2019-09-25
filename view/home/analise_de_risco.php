<div data-role="page" id="analise_de_risco" data-theme="b">
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
		<textarea placeholder="Digitar possiveis erros nesta etapa"></textarea>
		<br>
		<textarea placeholder="Digitar possiveis resoluções nesta etapa"></textarea>
		<a href="#espiral" class="ui-btn">Finalizar etapa</a>
	</main>