<html>
<main>
<div class="panel-heading"><h1>Notícias</h1></div>

<div class = "botao_noticia">
<a class='btn btn-primary btn' href="<?php echo HOME_URI ?>noticia/criar">
    Enviar
</a>
</div>

<?php
if(isset($noticias)){
    foreach($noticias AS $noticia){
    ?>
    <div class="teste">
    <div class="panel panel-primary">
    <div class="panel-heading"><h2><?php echo $noticia->titulo ?></h2></div>
        <?php echo substr($noticia->descricao,0,180)."..." ?><a href="<?php echo HOME_URI."noticia/ver/".$noticia->id;?>">Ler mais</a>
        <div class='data'><span class="label label-primary"><?php echo $noticia->data ?></span><span class="label label-primary"><?php echo "Por:".$noticia->nome_usuario ?></span></div>
        <a href="<?php echo HOME_URI;?>noticia/excluir_noticia/<?php echo $noticia->id; ?>"> <button class="btn btn-danger">Deletar</button> </a>
    </div>
    </div>
    <?php
    }
}
?>
    

</main>
</html>