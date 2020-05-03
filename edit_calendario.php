<br>
<br>
<br>
<h5>Editar Informações de Eventos</h5>
<br>
<br>
<br>
<?php
	$sql = "SELECT * FROM calendario
			WHERE id_evento=".$_REQUEST["id_evento"];
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=save_calendario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_evento" value="<?php print $row->id_evento; ?>">
	<div class="form-group">
		<label>Editar o Nome</label>
		<input type="text" name="nome_evento" class="form-control" value="<?php print $row->nome_evento; ?>">
	</div>
	<div class="form-group">
		<label>Editar a Data do Evento</label>
		<input type="text" name="data_evento" class="form-control" value="<?php print $row->data_evento; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Horário do Evento</label>
		<input type="text" name="horario_evento" class="form-control" value="<?php print $row->horario_evento; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Local do Evento</label>
		<input type="text" name="local_evento" class="form-control" value="<?php print $row->local_evento; ?>">
	</div>
	<div class="form-group">
		<button type="submit" style="width: 100%;" class="btn btn-success">Salvar</button>
	</div>
</form>
