<div data-role="page" id="scrum_sprint_planning" data-theme="b">
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

	<div data-role="content" data-theme="b">
	  <h2>Sprint Plannig:</h2>
	  <h4 style="padding: 10px">Escreva o tempo dos Sprints</h4>
	  <input type="number" placeholder="1" name="">
	  <select>
	  	<option>Dias</option>
	  	<option>Semanas</option>
	  	<option>Meses</option>
	  	<option>Anos</option>
	  </select>
	  <h4 style="padding: 10px">Selecione a quantidade de Sprints</h4>
	  <select>
	  	<option>1</option>
	  	<option>2</option>
	  	<option>3</option>
	  	<option>4</option>
	  </select>
	 </div>

	 <div style="text-align: center"><a href="#scrum_grooming_prioridades" class="ui-btn ui-btn-inline">Voltar</a>
		<a href="#scrum_definicao_sprints" class="ui-btn ui-btn-inline">Próximo</a></div>

	</main>

<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>