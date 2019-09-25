<div data-role="page" id="scrum_fazendo" data-theme="b">
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
		<a href="#scrum_fazendo" class="ui-btn ui-btn-inline ui-btn-active">Fazendo</a>
		<a href="#scrum_validacao" class="ui-btn ui-btn-inline">Validação</a>
		<a href="#scrum_concluido" class="ui-btn ui-btn-inline">Concluido</a>
	</div>
	<br> <br> <br> <br>
	<div data-role="content" data-theme="b">

	<div style="padding-top: 20px" class="ui-block-a">
		<legend>Funcionalidade X:</legend>
	</div>
	<div class="ui-block-b">
		<select>
			<option>Parceiro X</option>
			<option>Parceiro Y</option>
		</select>
	</div>
	<div style="padding-top: 20px" class="ui-block-a">
		<legend>Funcionalidade Y:</legend>
	</div>
	<div class="ui-block-b">
		<select>
			<option>Parceiro Y</option>
			<option>Parceiro Y</option>
		</select>
	</div>
	<div style="padding-top: 20px" class="ui-block-a">
		<legend>Funcionalidade Z:</legend>
	</div>
	<div class="ui-block-b">
		<select>
			<option>Parceiro Z</option>
			<option>Parceiro Y</option>
		</select>
	</div>

  </div>

  <a href="#" class="ui-btn">Enviar</a>

</main>

<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>