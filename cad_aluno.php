<br>
<br>
<h5>Matricular Aluno</h5>
<br>
<br>
<form action="?page=save_aluno" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Turma</label>
		<?php
			$sql = "SELECT * FROM turma";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='turma_id_turma' class='form-control'>";
				print "<option> Selecione a Turma</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_turma."'>".$row->categoria."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
<br>
	<div class="form-group">
		<label>Nome do Aluno </label>
		<input type="text" name="nome_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>CPF do Aluno </label>
		<input type="text" name="cpf_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Data de Nascimento do Aluno </label>
		<input type="text" name="data_nasc_aluno" class="form-control">
	</div>
	<div class="form-group">
		<label>Nome do Responsável </label>
		<input type="text" name="nome_responsavel" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF do Responsável </label>
		<input type="text" name="cpf_responsavel" class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço </label>
		<input type="text" name="endereco_aluno" class="form-control">
	</div>
	<div class="form-group">
		<label>Telefone </label>
		<input type="text" name="telefone_aluno" class="form-control">
	</div>
	<div class="form-group">
		<label>E-mail </label>
		<input type="text" name="email_aluno" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>