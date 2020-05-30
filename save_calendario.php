<?php
	switch(@$_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO calendario (
						nome_evento,
						data_evento,
						horario_evento,
						local_evento)
					VALUES (
					'".@$_REQUEST["nome_evento"]."',
					'".@$_REQUEST["data_evento"]."', 
					'".@$_REQUEST["horario_evento"]."',
					'".@$_REQUEST["local_evento"]."')";
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE calendario SET
						nome_evento='".@$_REQUEST["nome_evento"]."',
						data_evento='".@$_REQUEST["data_evento"]."',
						horario_evento='".@$_REQUEST["horario_evento"]."',
						local_evento='".@$_REQUEST["local_evento"]."'
						WHERE id_evento=".$_REQUEST["id_evento"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM calendario WHERE id_evento=".@$_REQUEST["id_evento"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
		
	}
?>
<p><a href="?page=ls_calendario" style="width:100%;" class="btn btn-primary">Listar</a></p>
