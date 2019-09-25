<div data-role="page" id="scrum_home" data-theme="b">
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
	<a href="#scrum_concluido" class="ui-btn ui-btn-inline">Concluido</a>
	</div>
	<h2 style="padding-left: 5px" class="text-project">Kanban Bord</h2>
	<div data-role="content" data-theme="b">
	<h3>Backlog:</h3>
	  <label>Funcionalidade X</label>
	  <label>Funcionalidade Y</label>
	  <label>Funcionalidade Z</label> 
	</div>
	<div data-role="content" data-theme="b">
	<h3>Fazendo:</h3>
	  <label>Funcionalidade X - Parceiro Y</label>
	  <label>Funcionalidade Y - Parceiro Y</label>
	  <label>Funcionalidade Z - Parceiro X</label> 
	</div>
	<div data-role="content" data-theme="b">
	<h3>Validação:</h3>
	  <label>Funcionalidade X - Parceiro Y</label>
	  <label>Funcionalidade Y - Parceiro Y</label>
	  <label>Funcionalidade Z - Parceiro X</label> 
	</div>
	<div data-role="content" data-theme="b">
	<h3>Concluido:</h3>
	  <label>Funcionalidade X - Parceiro Y</label>
	  <label>Funcionalidade X - Parceiro X</label>
	  <label>Funcionalidade Z - Parceiro X</label> 
	</div>

	<a href="#scrum_proximo_sprint" class="ui-btn">Proximo Sprint</a>

</main>

<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>






