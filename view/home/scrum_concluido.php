<div data-role="page" id="scrum_concluido" data-theme="b">
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

	<h1 style="text-align: center;" class="text-project">Game</h1>
	<h2 style="text-align: center">Scrum</h2>

	<div style="text-align: center">
		<a href="#scrum_home" class="ui-btn ui-btn-inline">Home</a>
		<a href="#scrum_fazendo" class="ui-btn ui-btn-inline">Fazendo</a>
		<a href="#scrum_validacao" class="ui-btn ui-btn-inline">Validação</a>
		<a href="#scrum_concluido" class="ui-btn ui-btn-inline ui-btn-active">Concluido</a>
	</div>

	<div data-role="content" data-theme="b">
		<h2 class="text-project">Concluído</h2>
		<label>Selecione uma funcionalidade concluída.</label>
		<select>
			<option>Funcionalidade Y - Parceiro X</option>
			<option>Funcionalidade X - Parceiro Y</option>
			<option>Funcionalidade Z - Parceiro Z</option>
		</select>
	</div>
	<a href="#" class="ui-btn">Enviar</a>

</main>

<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>

</div>