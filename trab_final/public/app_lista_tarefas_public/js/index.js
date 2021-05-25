function editar(id, txt_tarefa) {
  // criar um form edição
  let form = document.createElement("form");
  form.action = "tarefa_controller.php?acao=atualizar";
  form.method = "post";
  form.className = "row";
  // input entrada do texto
  let inputTarefa = document.createElement("input");
  inputTarefa.type = "text";
  inputTarefa.name = "tarefa";
  inputTarefa.className = "col-9 form-control";
  inputTarefa.value = txt_tarefa;
  //inpur hidden para guardar id da tarefa e localizar no bd
  let inputId = document.createElement("input");
  inputId.type = "hidden";
  inputId.name = "id";
  inputId.value = id;
  // button para envio
  let button = document.createElement("button");
  button.type = "submit";
  button.className = "col-2 btn btn-info";
  button.innerHTML = "Atualizar";
  // incluir
  form.appendChild(inputTarefa); //input
  form.appendChild(button); //button
  form.appendChild(inputId); //input Id

  // div tarefa
  let tarefa = document.getElementById("tarefa_" + id);
  // remover texto para incluir form
  tarefa.innerHTML = "";
  tarefa.insertBefore(form, tarefa[0]);
}
function remover(id) {
  location.href = `todas_tarefas.php?acao=remover&id=${id}`;
}
function marcarRealizada(id) {
  location.href = `todas_tarefas.php?acao=marcarRealizada&id=${id}`;
}
// Pendentes

function editarPendente(id, txt_tarefa) {
  // criar um form edição
  let form = document.createElement("form");
  form.action = "index.php?pag=index&acao=atualizar";
  form.method = "post";
  form.className = "row";
  // input entrada do texto
  let inputTarefa = document.createElement("input");
  inputTarefa.type = "text";
  inputTarefa.name = "tarefa";
  inputTarefa.className = "col-9 form-control";
  inputTarefa.value = txt_tarefa;
  //inpur hidden para guardar id da tarefa e localizar no bd
  let inputId = document.createElement("input");
  inputId.type = "hidden";
  inputId.name = "id";
  inputId.value = id;
  // button para envio
  let button = document.createElement("button");
  button.type = "submit";
  button.className = "col-2 btn btn-info";
  button.innerHTML = "Atualizar";
  // incluir
  form.appendChild(inputTarefa); //input
  form.appendChild(button); //button
  form.appendChild(inputId); //input Id

  // div tarefa
  let tarefa = document.getElementById("tarefa_" + id);
  // remover texto para incluir form
  tarefa.innerHTML = "";
  tarefa.insertBefore(form, tarefa[0]);
}

function removerPendente(id) {
  location.href = `index.php?pag=index&acao=remover&id=${id}`;
}
function marcarRealizadaPendente(id) {
  location.href = `index.php?pag=index&acao=marcarRealizada&id=${id}`;
}
