<div id="perfil-membro" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<div data-role="content">
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<img src="../../img/user.png" width="80">	
				</div>
				<h3>Usuário</h3>
				<div class="ui-block-b">
					<label>Email: usuario@teste.com</label>
					<label>Telefone: 9199999-9999</label>		
				</div>
			</div>
		</div>
		<button>Solicitar Parceiria</button>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil-membro" class="ui-btn-active">Projetos Gerenciado</a></li>
				<li><a href="#perfil-membro-participados">Projetos Participados</a></li>
			</ul>
		</nav>
		<ul data-role="listview">
		    <li><a href="#">Game 1</a></li>
		    <li><a href="#">Game 2</a></li>
		    <li><a href="#">Game 3</a></li>
		    <li><a href="#">Game 4</a></li>
		    <li><a href="#">Game 5</a></li>
		</ul>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>

<div id="perfil-membro-participados" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left">Perfil</a>
		<h1>G-PROCESS</h1>
		<a href="#" data-icon="lock" class="ui-btn-right">Sair</a>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<div data-role="content">
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<img src="../../img/user.png" width="80">	
				</div>
				<h3>Usuário</h3>
				<div class="ui-block-b">
					<label>Email: usuario@teste.com</label>
					<label>Telefone: 9199999-9999</label>		
				</div>
			</div>
		</div>
		<button>Solicitar Parceiria</button>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil-membro">Projetos Gerenciado</a></li>
				<li><a href="#perfil-membro-participados" class="ui-btn-active">Projetos Participados</a></li>
			</ul>
		</nav>
		<ul data-role="listview">
		    <li><a href="#">Game 1</a></li>
		    <li><a href="#">Game 2</a></li>
		    <li><a href="#">Game 3</a></li>
		    <li><a href="#">Game 4</a></li>
		    <li><a href="#">Game 5</a></li>
		</ul>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>