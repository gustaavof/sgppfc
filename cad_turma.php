<br>
<br>
<h5>Cadastrar Turma</h5>
<br>
<br>
<form action="?page=save_turma" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Professor da Turma</label>
		<?php
			$sql = "SELECT * FROM funcionario";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option> Selecione o Professor Pelo Nome</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
<br>
	<div class="form-group">
		<label>Dias da Semana </label>
		<input type="text" name="dias" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Horário da Aula </label>
		<input type="text" name="horario" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Categoria </label>
		<input type="text" name="categoria" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>