<?php
  $acao = 'recuperarTarefasRealizadas';
	require('tarefa_controller.php');

	// echo '<pre>';
	// print_r($tarefas);
	// echo '</pre>';
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="js/index.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand " href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Task List">
					Task List
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas Realizadas</a></li>
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Tarefas Realizadas</h4>
								<hr />
								<?php foreach($tarefas as $indice => $tarefa){?>
									
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?= $tarefa ->id ?>">
									<s>	<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)</s>
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger cursor-pointer" onclick="remover(<?= $tarefa ->id ?>)"></i>
									</div>
								</div>

								<?php } ?>


							</div>
						</div>
					</div>
					<p>Você possui <?= count($tarefas) ?> tarefa(s) realizada(s)!</p>
				</div>
			</div>
		</div>
	</body>
</html>