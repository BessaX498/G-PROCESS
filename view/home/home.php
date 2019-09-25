<div id="home" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active" id="navbar_home">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<div id="find_people">
			
		</div>
		<div data-role='popup' id='purchase' data-theme='a' data-overlay-theme='b' class='ui-content' style='max-width:340px; padding-bottom:2em;'>
		    <h3>Deseja Solicitar parceiria?</h3>
			<button data-theme='b'>Solicitar Parceiria</button>
		</div>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<script type="text/javascript" src="js/home/atualiza_pessoas.js"></script>