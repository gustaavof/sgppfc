<br>
<br>
<h3>CADASTRO DE FUNCIONÁRIOS</h3>
<br>
<br>
<form action="?page=save_funcionario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Funcionário</label>
		<input type="text" name="nome_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF do Funcionário</label>
		<input type="text" name="cpf_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento do Funcionário</label>
		<input type="text" name="data_nasc_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço do Funcionário</label>
		<input type="text" name="endereco_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Telefone do Funcionário</label>
		<input type="text" name="telefone_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Email do Funcionário</label>
		<input type="text" name="email_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Cargo do Funcionário</label>
		<?php
			$sql = "SELECT * FROM cargo";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='cargo_id_cargo' class='form-control'>";
				print "<option> Selecione o Cargo</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_cargo."'>".$row->nome_cargo."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<button type="submit" style="width: 100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>