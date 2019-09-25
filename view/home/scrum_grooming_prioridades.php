<div data-role="page" id="scrum_grooming_prioridades" data-theme="b">
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
		<h2 class="text-project">Grooming/Prioriades:</h2>
		<h4 style="padding: 10px">Selecionce o nivel de prioridades das tarefas</h4>

	   <form>
	   	<fieldset data-role="controlgroup" data-mini="true">
	   	<legend>Funcionalidade X:</legend>
		<div class="ui-block-a">
        	<label for="grid-radio-1">Imprescindinvel</label>
        	<input type="radio" id="grid-radio-1" name="radio-choice-v-6" id="radio-choice-v-6a" value="on" checked="checked">
        </div>
		 <div class="ui-block-b">
        	<label for="grid-radio-2">Importante</label>
        	<input type="radio" id="grid-radio-2" name="radio-choice-v-6" id="radio-choice-v-6b" value="off">
        </div>
		<div class="ui-block-c">
        	<label for="grid-radio-3">Seria bom ter</label>
        	<input type="radio" id="grid-radio-3" name="radio-choice-v-6" id="radio-choice-v-6c" value="other">
        </div>
	   </fieldset>
	</form>

	   <form>
	   	<fieldset data-role="controlgroup" data-mini="true">
	   	<legend>Funcionalidade Y:</legend>
		<div class="ui-block-a">
        	<label for="grid-radio-4">Imprescindinvel</label>
        	<input type="radio" id="grid-radio-4" name="radio-choice-v-6" id="radio-choice-v-6d" value="on" checked="checked">
        </div>
		 <div class="ui-block-b">
        	<label for="grid-radio-5">Importante</label>
        	<input type="radio" id="grid-radio-5" name="radio-choice-v-6" id="radio-choice-v-6e" value="off">
        </div>
		<div class="ui-block-c">
        	<label for="grid-radio-6">Seria bom ter</label>
        	<input type="radio" id="grid-radio-6" name="radio-choice-v-6" id="radio-choice-v-6f" value="other">
        </div>
	   </fieldset>
	</form>

	  <form>
	   	<fieldset data-role="controlgroup" data-mini="true">
	   	<legend>Funcionalidade Z:</legend>
		<div class="ui-block-a">
        	<label for="grid-radio-7">Imprescindinvel</label>
        	<input type="radio" id="grid-radio-7" name="radio-choice-v-6" id="radio-choice-v-6g" value="on" checked="checked">
        </div>
		 <div class="ui-block-b">
        	<label for="grid-radio-8">Importante</label>
        	<input type="radio" id="grid-radio-8" name="radio-choice-v-6" id="radio-choice-v-6h" value="off">
        </div>
		<div class="ui-block-c">
        	<label for="grid-radio-9">Seria bom ter</label>
        	<input type="radio" id="grid-radio-9" name="radio-choice-v-6" id="radio-choice-v-6i" value="other">
        </div>
	   </fieldset>
	</form>
	 </div>

	 <div style="text-align: center"><a href="#scrum_visao_do_produto" class="ui-btn ui-btn-inline">Voltar</a>
		<a href="#scrum_sprint_planning" class="ui-btn ui-btn-inline">Próximo</a></div>

	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>