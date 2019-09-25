<div data-role="page" id="espiral" data-theme="b">
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
		
		<div mbsc-card>

			<h1 style="text-align: center;" class="text-project">Game</h1>
			<h2 style="text-align: center">Espiral</h2>

			<div data-role="content" data-theme="b">
				<h2 class="text-project">Conceito</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo7" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#popupMissao7" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button" class="ui-btn ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>
				</div>
				<h4 style="text-align: right">Missões 1/3</h4>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo7" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>
			<!-- POPUP MISSÃO -->
			<div data-role="popup" id="popupMissao7" data-theme="b" class="ui-corner-all">
            	<input type="text" placeholder="Adicionar missão" name="">
				Designar parceiro
				<select>
					<option>Parceiro X</option>
					<option>Parceiro X</option>
				</select>
				<hr>
				 <fieldset data-role="controlgroup">
               		<legend><h2>Lista de missões:</h2></legend>
             		<input type="checkbox" name="checkbox-10a" id="checkbox-10a" checked="">
             		<label for="checkbox-10a">Primeira Reunião</label>
                 	<input type="checkbox" name="checkbox-11a" id="checkbox-11a">
              	 	<label for="checkbox-11a">Termo de abertura</label>
              		<input type="checkbox" name="checkbox-12a" id="checkbox-12a">
             		<label for="checkbox-12a">Termo de desenvolvimento</label>
					<button>Salvar</button>
				</fieldset>
			</div>

			  <form>
    		  <input type="range" name="slider-2" id="slider-2" data-highlight="true" min="0" max="100" value="50">
			  </form>
			 <a href="#analise_de_risco" class="ui-btn">Análise de risco</a>
			</div>

			<div data-role="content" data-theme="b">
				<h2 class="text-project">Pré- Produção</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo8" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-state-disabled ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#popupMissao8" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button" class="ui-btn ui-state-disabled ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>
				</div>
				<h4 style="text-align: right">Missões 0/3</h4>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo8" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>
			<!-- POPUP MISSÃO -->
			<div data-role="popup" id="popupMissao8" data-theme="b" class="ui-corner-all">
            	<input type="text" placeholder="Adicionar missão" name="">
				Designar parceiro
				<select>
					<option>Parceiro X</option>
					<option>Parceiro X</option>
				</select>
				<hr>
				 <fieldset data-role="controlgroup">
               		<legend><h2>Lista de missões:</h2></legend>
             		<input type="checkbox" name="checkbox-13a" id="checkbox-13a" checked="">
             		<label for="checkbox-13a">Primeira Reunião</label>
                 	<input type="checkbox" name="checkbox-14a" id="checkbox-14a">
              	 	<label for="checkbox-14a">Termo de abertura</label>
              		<input type="checkbox" name="checkbox-15a" id="checkbox-15a">
             		<label for="checkbox-15a">Termo de desenvolvimento</label>
					<button>Salvar</button>
				</fieldset>
			</div>

			  <form>
    		  <input type="range" name="slider-2" id="slider-2" disabled="disabled" data-highlight="true" min="0" max="100" value="0">
			  </form>
			 <a href="#analise_de_risco" class="ui-btn">Análise de risco</a>
			</div>

			<div data-role="content" data-theme="b">
				<h2 class="text-project">Protótipo</h2>
				
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#popupAnexo9" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-state-disabled ui-icon-edit ui-btn-icon-left ui-shadow ui-corner-all">Anexos</a>
					</div>
					<div class="ui-block-b">
						<a href="#popupMissao9" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button" class="ui-btn ui-state-disabled ui-icon-tag ui-btn-icon-left ui-shadow ui-corner-all">Missão</a>
					</div>	
				</div>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#cascata_dica" class="ui-btn ui-icon-info ui-btn-icon-left ui-shadow ui-corner-all">Dica</a>
					</div>
				</div>
				<h4 style="text-align: right">Missões 0/3</h4>
			<!-- POPUP Anexo -->
			<div data-role="popup" id="popupAnexo9" data-theme="b" class="ui-corner-all">
            	<div class="container">
                	<form enctype="multipart/form-data" action="upload.php" method="POST">
                		<label class="control-label">Selecione os arquivos desejados:</label><br>
                		<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                		<input type="submit" value="Enviar" />
                	</form>
                </div>
			</div>
			<!-- POPUP MISSÃO -->
			<div data-role="popup" id="popupMissao9" data-theme="b" class="ui-corner-all">
            	<input type="text" placeholder="Adicionar missão" name="">
				Designar parceiro
				<select>
					<option>Parceiro X</option>
					<option>Parceiro X</option>
				</select>
				<hr>
				 <fieldset data-role="controlgroup">
               		<legend><h2>Lista de missões:</h2></legend>
             		<input type="checkbox" name="checkbox-16a" id="checkbox-16a" checked="">
             		<label for="checkbox-16a">Primeira Reunião</label>
                 	<input type="checkbox" name="checkbox-17a" id="checkbox-17a">
              	 	<label for="checkbox-17a">Termo de abertura</label>
              		<input type="checkbox" name="checkbox-18a" id="checkbox-18a">
             		<label for="checkbox-18a">Termo de desenvolvimento</label>
					<button>Salvar</button>
				</fieldset>
			</div>

			  <form>
    		  <input type="range" name="slider-2" id="slider-2" disabled="disabled" data-highlight="true" min="0" max="100" value="0">
			  </form>
			 <a href="#analise_de_risco" class="ui-btn">Análise de risco</a>
			</div>

	</main>

	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>

</div>