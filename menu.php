<?php
include('verifica_login.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="stylemenu.css">
<title>SGPPFC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="menu.php">SGPPFC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
	<ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Funcionários
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="?page=cad_funcionario">Cadastrar</a>
			  <a class="dropdown-item" href="?page=ls_funcionario">Listar</a>
			</div>
		</li>     
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Alunos
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="?page=cad_aluno">Cadastrar</a>
			  <a class="dropdown-item" href="?page=ls_aluno">Listar</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Turmas
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="?page=cad_turma">Cadastrar</a>
			  <a class="dropdown-item" href="?page=ls_turma">Listar</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Calendário
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="?page=cad_calendario">Cadastrar</a>
			  <a class="dropdown-item" href="?page=ls_calendario">Listar</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Pagamentos
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="?page=cad_pagamento">Cadastrar</a>
			  <a class="dropdown-item" href="?page=ls_pagamento">Listar</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="logout.php">Sair</a>
		</li>
	</ul>
</div>
</nav>

<div class="container">
<div class="row">
	<div class="col-lg-12">
		<?php
			include("config.php");
			switch(@$_REQUEST["page"]){
				// funcionarios
				case "cad_funcionario":
					include("cad_funcionario.php");
				break;
				case "ls_funcionario":
					include("ls_funcionario.php");
				break;
				case "edit_funcionario":
					include("edit_funcionario.php");
				break;
				case "save_funcionario":
					include("save_funcionario.php");
				break;
				// turmas
				case "cad_turma":
					include("cad_turma.php");
				break;
				case "ls_turma":
					include("ls_turma.php");
				break;
				case "edit_turma":
					include("edit_turma.php");
				break;
				case "save_turma":
					include("save_turma.php");
				break;
				// alunos
				case "cad_aluno":
					include("cad_aluno.php");
				break;
				case "ls_aluno":
					include("ls_aluno.php");
				break;
				case "edit_aluno":
					include("edit_aluno.php");
				break;
				case "save_aluno":
					include("save_aluno.php");
				break;
				// calendario
				case "cad_calendario":
					include("cad_calendario.php");
				break;
				case "ls_calendario":
					include("ls_calendario.php");
				break;
				case "edit_calendario":
					include("edit_calendario.php");
				break;
				case "save_calendario":
					include("save_calendario.php");
				break;
				// pagamento
				case "cad_pagamento":
					include("cad_pagamento.php");
				break;
				case "ls_pagamento":
					include("ls_pagamento.php");
				break;
				case "edit_pagamento":
					include("edit_pagamento.php");
				break;
				case "save_pagamento":
					include("save_pagamento.php");
				break;
			}
		?>
	</div>
</div>
</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>