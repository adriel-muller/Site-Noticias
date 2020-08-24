<main>
<div class="wrapper fadeInDown">
  <div id="formContent">
 
    <form action="<?php echo HOME_URI;?>usuario/criar" method="POST">
      <input type="text" id="name" class="fadeIn third" name="name" placeholder="Nome Completo">
      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="text" id="senha" class="fadeIn third" name="senha_confirmacao" placeholder="Confirme sua Senha!">
      <input type="submit" name="button" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="<?php echo HOME_URI;?>usuario/logar">Já tenho conta!</a>
    </div>

  </div>
</div>

</main>