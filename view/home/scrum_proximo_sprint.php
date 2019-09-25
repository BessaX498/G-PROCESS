<div data-role="page" id="scrum_proximo_sprint" data-theme="b">
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
	<a href="#scrum_home" class="ui-btn ui-btn-inline ui-btn-active">Home</a>
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
	  <textarea></textarea> 
	</div>
	<div data-role="content" data-theme="b">
	<h3>Validação:</h3>
	  <textarea></textarea> 
	</div>
	<div data-role="content" data-theme="b">
	<h3>Concluido:</h3>
	  <textarea></textarea> 
	</div>
	<div style="text-align: center">
	<a href="#popupAnexo" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Realizar mais um backlog</a>
	<div data-role="popup" id="popupAnexo" data-theme="b" class="ui-corner-all">
        <div class="container">
            <form enctype="multipart/form-data" action="upload.php" method="POST">
               	<label class="control-label"><h4> Sprint Backlog: </h4></label><br>
              	<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                <input type="submit" value="Enviar" />
                <hr>
                <h4>Lista de anéxos:</h4>
                <ul>
                <li><a href="#">Roteiro.pdf</a></li>
                <li><a href="#">GDD.pdf</a></li>
                </ul>
            </form>
       </div>
	</div>
	<a href="#scrum_home" class="ui-btn ui-btn-inline">Voltar</a>
	<a href="#" class="ui-btn ui-btn-inline">Finalizar projeto</a>
	</div>

</main>
<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>






