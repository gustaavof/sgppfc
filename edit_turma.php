<br>
<br>
<h5>Editar Dados da Turma</h5>
<br>
<br>
<?php
	$sql = "SELECT * FROM turma 
			WHERE id_turma=".$_REQUEST["id_turma"];
			
	$res = $conn->query($sql) or die($conn->error);
	$row = $res->fetch_object();
?>
<form action="?page=save_turma" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_turma" value="<?php print $row->id_turma; ?>">
	<div class="form-group">
		<label>Selecione o Professor Para Editar</label>
		<?php
			$sql1 = "SELECT * FROM funcionario";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;
			
			if($qtd1 > 0){
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option> Selecione o modelo do funcionario </option>";
				while($row1 = $res1->fetch_object()){
					print "<option value='".$row1->id_funcionario."' ".($row1->id_funcionario == $row->funcionario_id_funcionario?"selected":"").">".$row1->modelo_funcionario."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Editar os Dias de Aula</label>
		<input type="text" name="dias" class="form-control" value="<?php print $row->dias; ?>">
	</div>
	<div class="form-group">
		<label>Editar Horário da Aula</label>
		<input type="text" name="horario" class="form-control" value="<?php print $row->horario; ?>">
	</div>
	<div class="form-group">
		<label>Editar Categoria da Turma</label>
		<input type="text" name="categoria" class="form-control" value="<?php print $row->categoria; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>