<br>
<br>
<h3>ORGANIZAÇÃO DE ENVENTOS</h3>
<h4>Cadastramento</h4>
<br>
<br>
<form action="?page=save_calendario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Evento</label>
		<input type="text" name="nome_evento" class="form-control">
	</div>
	<div class="form-group">
		<label>Data do Evento</label>
		<input type="text" name="data_evento" class="form-control">
	</div>
	<div class="form-group">
		<label>Horário do Evento</label>
		<input type="text" name="horario_evento" class="form-control">
	</div>
	<div class="form-group">
		<label>Local do Evento</label>
		<input type="text" name="local_evento" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" style="width: 100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>