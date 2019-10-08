<script type="text/javascript" src="js/login/validate_user.js"></script>
<div id="login" data-role="page" data-theme="b">
	<header data-role="header" data-position="">
		<h1>G-PROCESS</h1>
	</header>
	<div data-role="content">
		<img align="center" src="img/logo.png" width="280" class="logo">
		<h1 align="center">Logar</h1>
		<form method="POST" name="#" id="form_login">
			<div class="box">
				<input type="email" name="login" placeholder="Login" data-theme="a" required>
				<input type="password" name="password" placeholder="Senha" data-theme="a" required>
				<a href="#cadastrar-se" class="ui-btn">Cadastrar-se</a>
				<a href="#esqueci" class="ui-btn">Esqueci minha Senha</a>
				<input type="submit" value="Entrar">
			</div>
		</form>
		<a href="#perfil-membro" class="g-signin2 ui-btn-left" data-onsuccess="onSignIn" data-theme="dark"></a>
		<a href="#perfil-membro" class="g-signin2 ui-btn-right" data-onsuccess="onSignIn" data-theme="dark"></a>
	</div>
</div>