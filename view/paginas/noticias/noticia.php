<main>
<div class="panel-heading"><h1>Notícias</h1></div>
<div class="panel panel-primary">

<div class="panel-heading"><h1><?php echo $noticia->titulo ?></h1></div>
    <?php echo $noticia->descricao?>
    
    <div class='data'>
        <span class="label label-primary"><?php echo $noticia->data ?></span>
        <span class="label label-primary"><?php echo "Por:".$noticia->nome_usuario ?></span>
    </div>
  
    </div>

    <div class="panel panel-primary">

    <div class="panel-heading">
            <h5 class="panel-title">Comentarios</h5>
    </div>

    <?php
        include HOME_DIR."classes/Comentario.php";

        $coment = new Comentario();
        $comentarios=$coment->listar_comentario($noticia->id);

        if($comentarios){
            foreach($comentarios as $comentario){


                ?>
                    <div class="coments">
                        <p class="nome-user"><?php echo ($comentario->nome) ?> </p>
                        <p class="coment-user"><?php echo ($comentario->comentario) ?></p>
                        <a href="<?php echo HOME_URI;?>comentario/excluir_comentario/<?php echo $comentario->id; ?>"> <button class="btn btn-danger">Deletar</button> </a>
                    </div>
            
                    <?php }
        } ?>
            <form class="form" method="post" action="<?php echo HOME_URI?>comentario/salvar/<?php echo $noticia->id?>">
            <div class="form-group">
            <input type="text" name="comentario" class="form-control" placeholder="Adicione um comentário">
            <div class="input-form">
            <button  type="submit" class="btn btn-primary btn-sm">Enviar</button>
            </div>
            </div>      
            
        </form>
    </div>
     

</div>
</main>
