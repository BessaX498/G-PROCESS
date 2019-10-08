<?php

	//Iniciar Sessão
	session_start();

	//Incluir a Header
	include('control/header.html');
	
	if (isset($_SESSION['login'])) {
		include('view/home/home.php');
		include('view/home/perfil-membro.php');
		include('view/home/perfil.php');
		include('view/home/parceiro.php');
		include('view/home/checar_projetos.php');
		include('view/home/iniciar_projeto.php');
		include('view/home/scrum_definir_nome.php');
		include('view/home/scrum_visao_do_produto.php');
		include('view/home/scrum_grooming_prioridades.php');
		include('view/home/scrum_sprint_planning.php');
		include('view/home/scrum_definicao_sprints.php');
		include('view/home/cascata.php');
		include('view/home/prototipacao.php');
		include('view/home/incremental.php');
        include('view/home/espiral.php');
        include('view/home/scrum_home.php');
        include('view/home/scrum_proximo_sprint.php');
        include('view/home/scrum_fazendo.php');
        include('view/home/scrum_validacao.php');
        include('view/home/scrum_concluido.php');
		include('view/home/cascata_dica.php');
		include('view/home/analise_de_risco.php');
	}else{
		include('view/login/login.php');
		include('view/login/cadastrar-se.php');
		include('view/login/esqueci_senha.php');
		include('view/login/codigo.php');
		include('view/login/nova_senha.php');
	}
?>