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
			$sql = "SELECT * FROM funcionario WHERE cargo_id_cargo = 1";
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
	<div class="form-group">
		<label>Código da Turma </label>
		<input type="text" placeholder="Exemplo: Inf-Juv, T e Q, 8-10 para Turma Infanto-juvenil, Terça e Quinta, 08:00 as 09:45" name="codigo_turma" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="dias">Dias de Aula </label>
			<select class="form-control" name="dias">
				<option value='' selected disabled>Selecione os Dias</option>
				<option value="Terça e Quinta">Terça e Quinta</option>
				<option value="Segunda, Quarta e Sexta">Segunda, Quarta e Sexta</option>
			</select>
	</div>
	<div class="form-group">
		<label for="horario">Horário da Aula </label>
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
		<label for="categoria">Categoria da Turma </label>
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
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>