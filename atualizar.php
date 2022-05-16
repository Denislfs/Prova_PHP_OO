<?php
 require_once('header.php');
 require_once('funcao.php');
 $id = $_GET['id'];
 $res = $database->Consulta_alunos($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
    $ra = $_POST['ra'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];
 
	$res = $database->Atualizar_aluno($ra,$nome,$sobrenome,$idade, $id);
	if($res){
	 	echo "Alterado com Sucesso";
		header("location: consulta.php");
	}else{
	 	echo "Falha ao Alterar";
	}
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
	<h2>Alterar Cadastro de Alunos</h2>
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">RA</label>
	    <div class="col-sm-10">
	      <input type="text" name="ra"  class="form-control" id="input1" value="<?php echo $r['ra'] ?>" placeholder="RA" />
	    </div>
	</div>
 
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Nome</label>
	    <div class="col-sm-10">
	      <input type="text" name="nome"  class="form-control" id="input1" value="<?php echo $r['nome'] ?>" placeholder="Nome" />
	    </div>
	</div>
 
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Sobrenome</label>
	    <div class="col-sm-10">
	      <input type="text" name="sobrenome"  class="form-control" id="input1" value="<?php echo $r['sobrenome'] ?>" placeholder="sobrenome" />
	    </div>
	</div>
    
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Idade</label>
	    <div class="col-sm-10">
	      <input type="text" name="idade"  class="form-control" id="input1" value="<?php echo $r['idade'] ?>" placeholder="Idade" />
	    </div>
	</div>
    <input type="submit" onclick="cad()" class="btn btn-primary" value="Atualizar">

	<script>
        function cad(){
            alert("Cadastrado com sucesso!!");
        }
    </script>
</body>
</html>