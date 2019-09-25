<script type="text/javascript" src="js/login/insert_user.js"></script>
<!-- Cadastrar-se -->
<div data-role="page" data-theme="b" id="cadastrar-se">
	<div data-role="header">
		<h1>G-PROCESS</h1>
	</div>
	<div data-role="content">
		<img src="img/logo.png" width="280" class="logo">
		<h1 align="center">Cadastrar-se</h1>
		<form method="post" id="insert_user">
			<div class="box">
				<input type="text" name="name" placeholder="Nome Completo" data-theme="a" required>
				<input type="email" name="login" placeholder="Login" data-theme="a" required>
				<input type="password" name="password" id="password" placeholder="Senha" data-theme="a" required>
				<input type="password" name="password2" id="password2" placeholder="Confirmar senha" data-theme="a" required>
				<input type="text" name="number_phone" placeholder="Fone" data-theme="a" required>
				<input type="email" name="email" placeholder="Email" data-theme="a" required>
				<div class="ui-grid-a">
					<div class="ui-block-a">
						<a href="#login" data-role="button">Voltar</a>
					</div>
					<div class="ui-block-b">
						<button id="btnEnviar">Cadastrar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>