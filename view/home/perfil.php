<!-- Projetos Gerenciados -->
<div id="perfil" data-role="page" data-theme="b">
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
		<ul data-role="listview" data-inset="true">
			<li><a href="#perfil-modificacao">
			<img src="../../img/user.png">
			<h2>Usuário</h2>
			<p>Email: usuario@exemplo.com</p>
			<p>Telefone: 919999-9999</p>
			</a>
			</li>
		</ul>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil" class="ui-btn-active">Projetos Gerênciado</a></li>
				<li><a href="#participados">Projetos Participados</a></li>
				<li><a href="#parceiros">Parceiros</a></li>
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
<!-- Projetos Participados -->
<div id="participados" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left">Perfil</a>
		<h1>G-PROCESS</h1>
		<a href="#sair" data-icon="lock" class="ui-btn-right">Sair</a>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<ul data-role="listview" data-inset="true">
			<li><a href="#perfil-modificacao">
			<img src="../../img/user.png">
			<h2>Usuário</h2>
			<p>Email: usuario@exemplo.com</p>
			<p>Telefone: 919999-9999</p>
			</a>
			</li>
		</ul>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil">Projetos Gerênciado</a></li>
				<li><a href="#participados" class="ui-btn-active">Projetos Participados</a></li>
				<li><a href="#parceiros">Parceiros</a></li>
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
<!-- Parceiros -->
<div id="parceiros" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left">Perfil</a>
		<h1>G-PROCESS</h1>
		<a href="#sair" data-icon="lock" class="ui-btn-right">Sair</a>
	</header>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" class="ui-btn-active">Home</a></li>
			<li><a href="#iniciar_projetos">Iniciar Projeto</a></li>
			<li><a href="#checar_projetos">Checar Projetos</a></li>
		</ul>
	</nav>
	<main>
		<ul data-role="listview" data-inset="true">
			<li><a href="#perfil-modificacao">
			<img src="../../img/user.png">
			<h2>Usuário</h2>
			<p>Email: usuario@exemplo.com</p>
			<p>Telefone: 919999-9999</p>
			</a>
			</li>
		</ul>
		<nav data-role="navbar">
			<ul>
				<li><a href="#perfil">Projetos Gerênciado</a></li>
				<li><a href="#participados">Projetos Participados</a></li>
				<li><a href="#parceiros" class="ui-btn-active">Parceiros</a></li>
			</ul>
		</nav>
		<ul data-role="listview" data-inset="true">
			<li><a href="#parceiro">
			<img src="../../img/user.png">
			<h2>Parceiro</h2>
			<p>Projetos Gerenciados: N°</p>
			<p>Projetos Participados: N°</p>
			</a>
			</li>
			<li><a href="#parceiro">
			<img src="../../img/user.png">
			<h2>Parceiro</h2>
			<p>Projetos Gerenciados: N°</p>
			<p>Projetos Participados: N°</p></a>
			</li>
			<li><a href="#parceiro">
			<img src="../../img/user.png">
			<h2>Parceiro</h2>
			<p>Projetos Gerenciados: N°</p>
			<p>Projetos Participados: N°</p></a>
			</li>
		</ul>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<div id="perfil-modificacao"  data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="back">Voltar</a>
		<h1>G-PROCESS</h1>
	</header>
	<h1 align="center">Editar Perfil</h1>
	<form method="post" action="#">
		<label>Nome Completo:</label>
		<input type="text" placeholder="Usuário" name="nome" data-theme="a">
		<label>Login</label>
		<input type="text" placeholder="Usuário" name="nome" data-theme="a">
		<label>Senha</label>
		<input type="text" placeholder="Usuário" name="nome" data-theme="a">
		<label>Telefone</label>
		<input type="text" placeholder="Usuário" name="nome" data-theme="a">
		<label>Email</label>
		<input type="text" placeholder="Usuário" name="nome" data-theme="a">
		<input type="submit" value="Salvar">
	</form>
</div>