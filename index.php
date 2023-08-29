<?php 
    require_once 'vendor/autoload.php';

    include 'src/views/index.php';

    require_once 'src/classes/User.php';

    use Athernos\classes\User;
    use Athernos\classes\Produtos;

    $test = new User();
    $dados = $test->listarUser();
    $prod= new Produtos();

?>

<!-- <table class="table table-striped table-hover">
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
            
        </table> -->
        