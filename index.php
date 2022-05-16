<?php
require 'header.php';
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
        <br><br>
        <div class="row">
            <div class="col-4 col-sm-8">
                <div class="card" style="width: 18rem;">
                <img src="image/cadastro.png" class="card-img-top" alt="..." widht="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Realizar um cadastro!</h5>
                    <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
                </div>
                </div>
            </div>

            <div class="col-4 col-sm-4">
                <div class="card" style="width: 18rem;">
                <img src="image/alterar.png" class="card-img-top" alt="..." widht="250px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Consultar um cadastro!</h5>
                    <a href="consulta.php" class="btn btn-primary">Consultar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once('footer.php');
?>
</body>
</html>