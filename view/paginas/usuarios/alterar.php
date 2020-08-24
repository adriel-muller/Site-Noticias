<main>

<div class="wrapper fadeInDown">
  <div id="formContent">
 
  <form action="<?php echo HOME_URI;?>usuario/alterar_update/<?php echo $usuario_id ?>" method="POST">
      <input type="text" id="name" class="fadeIn third" name="nome" placeholder="Novo Nome">
      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Novo Email">
      <input type="submit" name="button" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="<?php echo HOME_URI;?>usuario/logar">Já tenho conta!</a>
    </div>

  </div>
</div>
</main>