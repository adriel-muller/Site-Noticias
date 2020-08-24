<main>

<div class="alert alert-success" role="alert">Bem vindo, <?php echo $_SESSION['nome']; ?>!</div>

<a href="<?php echo HOME_URI;?>usuario/add" class="btn">Add User</a>
<a href="<?php echo HOME_URI;?>usuario/exit" class="btn">Exit</a>
<table class="table">
<thead>
    <tr><td>ID</td><td>Nome</td><td>Email</td><td>Editar</td><td>Deletar</td></tr>

<?php

    $conect=Conexao::getConexao();
    $resultado=$conect->prepare("SELECT id,nome, email FROM usuario ORDER BY id");
    $resultado->execute();
    while($usuarios=$resultado->fetch(PDO::FETCH_ASSOC)):
?>

    <tr>
    <td><?php echo $usuarios["id"]; ?></td> 
    <td><?php echo $usuarios["nome"]; ?></td>
    <td><?php echo $usuarios["email"]; ?></td>
    <td> <a href="<?php echo HOME_URI;?>usuario/alterar/<?php echo $usuarios["id"];?>"> <button class="btn btn-info"> </button> </a> </td>
    <td> <a href="<?php echo HOME_URI;?>usuario/apagar/<?php echo $usuarios["id"];?>"> <button class="btn btn-danger"> </button> </a> </td>
    </tr>

<?php
endwhile;
?>

</thead>

</table>
</main>