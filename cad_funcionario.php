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
		<input type="number" name="telefone_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label>Email do Funcionário</label>
		<input type="text" name="email_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label for="cargo_funcionario">Função do Funcionário</label>
			<select class="form-control" id="cargo_funcionario">
				<option value='' selected disabled>Selecione o Cargo</option>
				<option value="Professor">Professor</option>
				<option value="Segurança">Segurança</option>
			</select>
	</div>
	<div class="form-group">
		<button type="submit" style="width: 100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>