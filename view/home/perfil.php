<!-- Projetos Gerenciados -->
<div id="perfil" data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
		<h1>G-PROCESS</h1>
		<button onclick="sair()" id="sair" data-icon="lock" class="ui-btn-right">Sair</button>
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
			<img src="img/user.png">
			<h2><?php echo $_SESSION['name'] ?></h2>
			<p>Email: <?php echo $_SESSION['email'] ?></p>
			<p>Telefone: <?php echo $_SESSION['number_phone'] ?></p>
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
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
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
			<img src="img/user.png">
			<h2><?php echo $_SESSION['name'] ?></h2>
			<p>Email: <?php echo $_SESSION['email'] ?></p>
			<p>Telefone: <?php echo $_SESSION['number_phone'] ?></p>
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
		<a href="#perfil" data-icon="user" class="ui-btn-left"><?php echo $_SESSION['name']; ?></a>
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
			<img src="img/user.png">
			<h2><?php echo $_SESSION['name'] ?></h2>
			<p>Email: <?php echo $_SESSION['email'] ?></p>
			<p>Telefone: <?php echo $_SESSION['number_phone'] ?></p>
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
		<div class='parceiros'>
		</div>
	</main>
	<footer data-role="footer" class="ui-bar" data-position="fixed">&reg; Direcione Sua Ideia </footer>
</div>
<div id="perfil-modificacao"  data-role="page" data-theme="b">
	<header data-role="header">
		<a href="#perfil" data-icon="back">Voltar</a>
		<h1>G-PROCESS</h1>
	</header>
	<h1 align="center">Editar Perfil</h1>
	<form method="post" id='edit_perfil'>
		<input type="text" value="<?php echo $_SESSION['name'] ?>" placeholder="Digite seu nome" name="name" data-theme="a">
		<label>Login</label>
		<input type="email" placeholder="Digite seu Login" name="login" data-theme="a" value=<?php echo $_SESSION['login'] ?>>
		<label>Senha</label>
		<input type="password" name="password" data-theme="a" placeholder="Digite sua senha nova senha">
		<label>Telefone</label>
		<input type="text" placeholder="Digite seu número de telefone" name="number_phone" data-theme="a" value=<?php echo $_SESSION['number_phone'] ?>>
		<label>Email</label>
		<input type="text" placeholder="Digite seu Email" name="email" data-theme="a" value=<?php echo $_SESSION['email'] ?>>
		<input type="submit" value="Salvar">
	</form>
</div>
<script src="js/perfil/edit_perfil.js"></script>
<script src="js/perfil/find_partner.js"></script>