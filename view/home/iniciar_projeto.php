<div data-role="page" id="iniciar_projetos" data-theme="b">
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
		<H1>Selecionar Parceiros</H1>
		<ul data-role="listview" data-split-icon="plus" data-filter="true" data-split-theme="b" data-inset="true">
			<li>
				<a href="#">
					<img src="../../img/user.png">
					<h2>Usuário</h2>
					</a>
				<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">
					Purchase album
				</a>
			</li>
			<li>
				<a href="#">
					<img src="../../img/user.png">
					<h2>Usuário</h2></a>
				<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">
					Purchase album
				</a>
			</li>
			<li>
				<a href="#">
					<img src="../../img/user.png">
					<h2>Usuário</h2></a>
				<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">
					Purchase album
				</a>
			</li>
		</ul>
		<div data-role="popup" id="purchase" data-theme="a" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
		    <h3>Purchase Album?</h3>
		    <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left ui-btn-inline ui-mini">Solicitar</a>
		    <a href="#" data-rel="back" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-mini">Cancelar</a>
		</div>
		<hr>
		<h1>Digitar Nome do Game</h1>
		<input type="text" name="nome" placeholder="Nome do Game" data-theme="a">
		<hr>
		<h1>Selecionar Metodologia</h1>
		<fieldset data-role="controlgroup">
			<!--<input type="radio" name="metodologia" id="cascata" value="choice-1" checked="checked">
			<label for="cascata"><a href="#cascata">Cascata</a></label>
			<input type="radio" name="metodologia" id="espiral" value="choice-2">
			<label for="espiral">Espiral</label>
			<input type="radio" name="metodologia" id="prototipacao" value="choice-3">
			<label for="prototipacao">Prototipação</label>
			<input type="radio" name="metodologia" id="incremental" value="choice-4">
			<label for="incremental">Incremental</label>
			<input type="radio" name="metodologia" id="scrum" value="choice-4">
			<label for="scrum">Scrum</label>-->
			<li><a href="#cascata" data-role="button">Cascata</a></li>
			<li><a href="#incremental" data-role="button">Incremental</a></li>
			<li><a href="#espiral" data-role="button">Espiral</a></li>
			<li><a href="#scrum_definir_nome" data-role="button">Scrum</a></li>
			<li><a href="#prototipacao" data-role="button">Prototipação</a></li>
		</fieldset>
		<input type="submit" name="" value="Próximo">
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>