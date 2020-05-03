<br>
<br>
<h5>Editar Dados de Transação</h5>
<br>
<br>
<?php
	$sql = "SELECT * FROM pagamento 
			WHERE id_pagamento=".$_REQUEST["id_pagamento"];
			
	$res = $conn->query($sql) or die($conn->error);
	$row = $res->fetch_object();
?>
<form action="?page=save_pagamento" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_pagamento" value="<?php print $row->id_pagamento; ?>">
	<div class="form-group">
		<label>Selecione o Envolvido Para Editar</label>
		<?php
			$sql1 = "SELECT * FROM funcionario";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;
			
			if($qtd1 > 0){
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option> Selecione o modelo do funcionario </option>";
				while($row1 = $res1->fetch_object()){
					print "<option value='".$row1->id_funcionario."' ".($row1->id_funcionario == $row->funcionario_id_funcionario?"selected":"").">".$row1->nome_funcionario."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Editar o Valor da Transação</label>
		<input type="text" name="valor_pagamento" class="form-control" value="<?php print $row->valor_pagamento; ?>">
	</div>
	<div class="form-group">
		<label>Editar a Data da Transação</label>
		<input type="text" name="data_pagamento" class="form-control" value="<?php print $row->data_pagamento; ?>">
	</div>
	<div class="form-group">
		<label for="referencia_pagamento">Referência da Transação</label>
			<select class="form-control" id="referencia_pagamento" value="<?php print $row->referencia_pagamento; ?>">
				<option>Pagamento de Matrícula</option>
				<option>Pagamento de Material</option>
				<option>Pagamento de Serviço</option>
				<option>Outro</option>
			</select>
	</div>
	<div class="form-group">
		<label>Tipo de Transação</label>
			<select class="form-control" name="tipo_pagamento" type="text" value="<?php print $row->tipo_pagamento; ?>">
				<option>Recebimento</option>
				<option>Pagamento</option>
			</select>
	</div>
	<div class="form-group">
		<label for="comprovante_pagamento">Comprovante</label>
		<input type="file" class="form-control-file" id="comprovante_pagamento" value="<?php print $row->comprovante_pagamento; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>