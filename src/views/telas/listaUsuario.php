<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/Athernos/src/views/telas/menu-lateral.php'; 

    require_once '../../../vendor/autoload.php';
    use Athernos\classes\User;

    $test = new User();
    $dados = $test->listarUser();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/css/main.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/js/script.js"></script>

    <title>Index View</title>
</head>
<body class="body-geral">
    <?php 
    include_once $_SERVER['DOCUMENT_ROOT'].'/Athernos/src/views/telas/menu-lateral.php'; ?>
    <div id="conteudo-principal" class="conteudo-principal">
        
        <div class="div-alert">
        
        </div>
    </div>
    <table class="table table-striped table-hover">
            <thead>

            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">nivel</th>

            </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($dados as $col => $linhas){
                ?>
            <tr>
                <th scope="row"><?php  echo $linhas['id'] ?></th>
                <td><?php  echo $linhas['nome'] ?></th>
                <td><?php  echo $linhas['email'] ?></th>
                <td><?php  echo $linhas['nivel'] ?></th>
            
    
            </tr>
                    <?php
                    }
                ?>
            </tbody>
            
    </table>    
</body>
</html>