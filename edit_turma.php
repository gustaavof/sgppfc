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
				print "<option> Selecione o nome do funcionario </option>";
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
		<label>Editar Código da Turma </label>
		<input type="text" name="codigo_turma" class="form-control">
	</div>
	<div class="form-group">
		<label for="dias">Editar Dias de Aula </label>
			<select class="form-control" name="dias">
				<option value='' selected disabled>Selecione os Dias</option>
				<option value="Terça e Quinta">Terça e Quinta</option>
				<option value="Segunda, Quarta e Sexta">Segunda, Quarta e Sexta</option>
			</select>
	</div>
	<div class="form-group">
		<label for="horario">Editar Horário da Aula </label>
			<select class="form-control" name="horario">
				<option value='' selected disabled>Selecione o Horários</option>
				<option value="08:00 às 09:45">08:00 às 09:45</option>
				<option value="10:00 às 11:45">10:00 às 11:45</option>
				<option value="13:00 às 14:45">13:00 às 14:45</option>
				<option value="15:00 às 16:45">15:00 às 16:45</option>
				<option value="17:00 às 18:45">17:00 às 18:45</option>
			</select>
	</div>
	<div class="form-group">
		<label for="categoria">Editar Categoria da Turma </label>
			<select class="form-control" name="categoria">
				<option value='' selected disabled>Selecione a Categoria</option>
				<option value="Fraldinha (7 a 9 anos)">Fraldinha (7 a 9 anos)</option>
				<option value="Dente de leite (10 a 11 anos)">Dente de leite (10 a 11 anos)</option>
				<option value="Pré-mirim (11 a 12 anos)">Pré-mirim (11 a 12 anos)</option>
				<option value="Mirim (12 a 13 anos)">Mirim (12 a 13 anos)</option>
				<option value="Infantil (14 a 15 anos)">Infantil (14 a 15 anos)</option>
				<option value="Infanto-juvenil (15 a 16 anos)">Infanto-juvenil (15 a 16 anos)</option>
				<option value="Juvenil (17 a 18 anos)">Juvenil (17 a 18 anos)</option>
			</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>