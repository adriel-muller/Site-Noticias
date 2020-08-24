<main> 

<div class="wrapper fadeInDown">
  <div id="formContent">
 
    <form action="<?php echo HOME_URI;?>usuario/entrar" method="POST">
      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" name="button" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="<?php echo HOME_URI;?>usuario/add">Não tenho uma conta!</a>
    </div>

  </div>
</div>

</main>