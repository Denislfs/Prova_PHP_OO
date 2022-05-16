<?php
 require_once('funcao.php');
 $id = $_GET['id'];
 $res = $database->Excluir_aluno($id);
 if($res){
 	header('location: consulta.php');
 }else{
 	echo "Failed to Delete Record";
 }
?>