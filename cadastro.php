<?php
 require_once('header.php');
 require_once('funcao.php');
 if(isset($_POST) & !empty($_POST)){
    $ra = $_POST['ra'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];

 
	 $res = $database->Cadastrar_Aluno($ra, $nome, $sobrenome, $idade);
	 if($res){
         function alert($message){
             echo "<script>alert('$message')</script>";
         }
        alert("Cadastrado com sucesso");        
       // header("location: index.php");
	 }else{
	 	echo "Falha ao cadastrar";
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
        <h2>Cadastro de Alunos da Fatec</h2>
        <p>cadastro de Alunos.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
                <label>RA</label>
                <input type="text" name="ra" placeholder="ra" required autofocus>
                <br><br>
                <label>Nome</label>
                <input type="text" name="nome" placeholder="nome" required autofocus>
                <br><br>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="sobrenome" required autofocus>
                <br><br>
                <label>Idade</label>
                <input type="text" name="idade" placeholder="Idade" required autofocus>
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                          
        </form>
    </div>  

    <?php
        include_once('footer.php');
    ?>

    



</body>
</html>