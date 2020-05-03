<br>
<br>
<br>
<h5>Editar Cadastro de funcionario</h5>
<br>
<br>
<br>
<?php
	$sql = "SELECT * FROM funcionario 
			WHERE id_funcionario=".$_REQUEST["id_funcionario"];
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=save_funcionario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">
	<div class="form-group">
		<label>Editar o Nome</label>
		<input type="text" name="nome_funcionario" class="form-control" value="<?php print $row->nome_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar o CPF</label>
		<input type="text" name="cpf_funcionario" class="form-control" value="<?php print $row->cpf_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar a Data de Nascimento</label>
		<input type="text" name="data_nasc_funcionario" class="form-control" value="<?php print $row->data_nasc_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Endereço</label>
		<input type="text" name="endereco_funcionario" class="form-control" value="<?php print $row->endereco_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Telefone</label>
		<input type="number" name="telefone_funcionario" class="form-control" value="<?php print $row->telefone_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar o E-mail</label>
		<input type="text" name="email_funcionario" class="form-control" value="<?php print $row->email_funcionario; ?>">
	</div>
	<div class="form-group">
		<label>Editar o Cargo</label>
		<input type="text" name="cargo_funcionario" class="form-control" value="<?php print $row->cargo_funcionario; ?>">
	</div>
	<div class="form-group">
		<button type="submit" style="width: 100%;" class="btn btn-success">Salvar</button>
	</div>
</form>




