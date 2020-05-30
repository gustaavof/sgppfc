<br>
<br>
<h5>Editar Dados de Alunos</h5>
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
		<label>Selecione a Turma</label>
		<?php
			$sql = "SELECT * FROM turma";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='turma_id_turma' class='form-control'>";
				print "<option> Selecione a Turma</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_turma."'>".$row->codigo_turma."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Aluno </label>
		<input type="text" placeholder="Neymar da Silva Santos Júnior" name="nome_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>CPF do Aluno </label>
		<input type="text" placeholder="Digite os 11 números do CPF sem ponto e sem traço" name="cpf_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Data de Nascimento do Aluno </label>
		<input type="text" placeholder="11/09/2001" name="data_nasc_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Nome do Responsável Pelo Aluno </label>
		<input type="text" placeholder="Edson Arantes do Nascimento" name="nome_responsavel" class="form-control" required>
	</div>
	<div class="form-group">
		<label>CPF do Responsável </label>
		<input type="text" placeholder="Digite os 11 números do CPF sem ponto e sem traço" name="cpf_responsavel" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Endereço Residencial do Aluno </label>
		<input type="text" placeholder="Rua Seleção Brasileira, Número 04, Bairro das Seleções, Brasília/DF CEP: 19541-970" name="endereco_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Telefone Para Contato </label>
		<input type="text" placeholder="(DDD)0-0000-0000" name="telefone_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<label>E-mail Para Contato </label>
		<input type="text" placeholder="neymar_barcelona@jogadores.com.br" name="email_aluno" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>