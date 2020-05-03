<br>
<br>
<h5>Cadastrar Nova Transação</h5>
<br>
<br>
<form action="?page=save_pagamento" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	
	<div class="form-group">
		<label>Envolvido</label>
		<?php
			$sql = "SELECT * FROM funcionario";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option> Selecione o Envolvido Pelo Nome</option>";
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
		<label>Valor </label>
		<input type="text" name="valor_pagamento" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Data </label>
		<input type="text" name="data_pagamento" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="referencia_pagamento">Referência da Transação</label>
			<select class="form-control" id="referencia_pagamento">
				<option value='' selected disabled>Selecione a Referência</option>
				<option value="1">Pagamento de Matrícula</option>
				<option value="2">Pagamento de Material</option>
				<option value="3">Pagamento de Serviço</option>
				<option value="4">Pagamento de Salário</option>
				<option value="5">Outro</option>
			</select>
	</div>
	<div class="form-group">
		<label for="tipo_pagamento">Tipo de Transação</label>
			<select class="form-control" id="tipo_pagamento">
				<option value='' selected disabled>Selecione o Tipo</option>
				<option value="Recebimento">Recebimento</option>
				<option value="Pagamento">Pagamento</option>
			</select>
	</div>
	<div class="form-group">
		<label for="comprovante_pagamento">Comprovante</label>
		<input type="file" class="form-control-file" id="comprovante_pagamento">
	</div>
	<div class="form-group">
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>