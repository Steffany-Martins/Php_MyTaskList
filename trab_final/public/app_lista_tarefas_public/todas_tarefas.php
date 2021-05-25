<?php
  $acao = 'recuperar';
	require('tarefa_controller.php');
	$countRealizada = 0;
	 foreach($tarefas as $indice => $tarefa){
		 if($tarefa->status == "realizado"){
			 $countRealizada++;
		 }
		}
		$porcentagem = round($countRealizada*100/count($tarefas)) ;
		//echo $porcentagem;
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
						<li class="list-group-item"><a href="todas_tarefas_realizadas.php">Tarefas Realizadas</a></li>
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
				<div class="progress">
  			<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width:<?= $porcentagem ?>%;" aria-valuenow="<?= $porcentagem ?>" aria-valuemin="0" aria-valuemax="100"><?= $porcentagem ?>%</div>
				</div>
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />
								<?php foreach($tarefas as $indice => $tarefa){?>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?= $tarefa ->id ?>">
										<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger cursor-pointer" onclick="remover(<?= $tarefa ->id ?>)"></i>
										<?php if($tarefa->status == 'pendente') { ?>
											<i class="fas fa-edit fa-lg text-info cursor-pointer" onclick="editar(<?= $tarefa ->id ?>, '<?= $tarefa ->tarefa ?>' )"></i>
											<i class="fas fa-check-square fa-lg text-success cursor-pointer" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
										<?php } ?>
									</div>
								</div>

								<?php } ?>
							


							</div>
						</div>
					</div>
					<p>Você possui <?= count($tarefas) ?> tarefa(s) no total</p>
				</div>
			</div>
		</div>
	</body>
</html>