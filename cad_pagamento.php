<br>
<br>
<h5>Cadastrar Nova Transação</h5>
<br>
<br>
<form action="?page=save_pagamento" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	
	<div class="form-group">
		<label>Envolvido </label>
		<input type="text" placeholder="Edson Arantes do Nascimento" name="envolvido" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Valor </label>
		<input type="text" placeholder="R$4800,00" name="valor_pagamento" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Data </label>
		<input type="text" placeholder="11/09/2001" name="data_pagamento" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="referencia_pagamento">Referência da Transação</label>
			<select class="form-control" name="referencia_pagamento">
				<option value='' selected disabled>Selecione a Referência</option>
				<option value="Pagamento de Matrícula">Pagamento de Matrícula</option>
				<option value="Pagamento de Material">Pagamento de Material</option>
				<option value="Pagamento de Serviço">Pagamento de Serviço</option>
				<option value="Pagamento de Salário">Pagamento de Salário</option>
				<option value="Outro">Outro</option>
			</select>
	</div>
	<div class="form-group">
		<label for="tipo_pagamento">Tipo de Transação</label>
			<select class="form-control" name="tipo_pagamento">
				<option value='' selected disabled>Selecione o Tipo</option>
				<option value="Recebimento">Recebimento</option>
				<option value="Pagamento">Pagamento</option>
			</select>
	</div>
	<div class="form-group">
		<label for="comprovante_pagamento">Comprovante</label>
		<input type="file" class="form-control-file" name="comprovante_pagamento">
	</div>
	<div class="form-group">
		<button type="submit" style="width:100%;" class="btn btn-success">Cadastrar</button>
	</div>
</form>