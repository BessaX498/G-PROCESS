<div id="checar_projetos" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos" class="ui-btn-active">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<h1 align="center">Lista de Projetos</h1>
		<div id="find_project">
			
		</div>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<script type="text/javascript" src="js/project/find_project.js"></script>
