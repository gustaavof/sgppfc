<br>
<br>
<h5>Editar Dados do Aluno</h5>
<br>
<br>
<?php
	$sql = "SELECT * FROM aluno
			WHERE id_aluno=".$_REQUEST["id_aluno"];
			
	$res = $conn->query($sql) or die($conn->error);
	$row = $res->fetch_object();
?>
<form action="?page=save_aluno" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
	<div class="form-group">
		<label>Selecione a Turma Para Editar</label>
		<?php
			$sql1 = "SELECT * FROM turma";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;
			
			if($qtd1 > 0){
				print "<select name='turma_id_turma' class='form-control'>";
				print "<option> Selecione a turma </option>";
				while($row1 = $res1->fetch_object()){
					print "<option value='".$row1->id_turma."' ".($row1->id_turma == $row->turma_id_turma?"selected":"").">".$row1->categoria."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Editar o Nome do Aluno</label>
		<input type="text" name="nome_aluno" class="form-control" value="<?php print $row->nome_aluno; ?>">
	</div>
	<div class="form-group">
		<label>Editar o CPF do Aluno</label>
		<input type="text" name="cpf_aluno" class="form-control" value="<?php print $row->cpf_aluno; ?>">
	</div>
	<div class="form-group">
		<label>Editar a Data de Nascimento do Aluno</label>
		<input type="text" name="data_nasc_aluno" class="form-control" value="<?php print $row->data_nasc_aluno; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Nome do Responsável</label>
		<input type="text" name="nome_responsavel" class="form-control" value="<?php print $row->nome_responsavel; ?>">
	</div>
	<div class="form-group">
		<label>Editar o CPF do Responsável</label>
		<input type="text" name="cpf_responsavel" class="form-control" value="<?php print $row->cpf_responsavel; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Endereço</label>
		<input type="text" name="endereco_aluno" class="form-control" value="<?php print $row->endereco_aluno; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Telefone</label>
		<input type="text" name="telefone_aluno" class="form-control" value="<?php print $row->telefone_aluno; ?>">
	</div>
	<div class="form-group">
		<label>Editar o E-mail</label>
		<input type="text" name="email_aluno" class="form-control" value="<?php print $row->email_aluno; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>