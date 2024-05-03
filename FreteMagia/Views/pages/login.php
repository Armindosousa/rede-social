
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login na FreteMagia</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="<?php echo INCLUDE_PATH_STATIC ?>/stylos/style.css" rel="stylesheet">
</head>

<body>
   <div class="sidebar"></div>

      <div class="form-container-login">

         <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>/images/logoMagia.svg" />
            <p>Conecte-se aos motoristas parceiros.</p>
         </div><!--- logo-chamada-login -->
         
         <div class="form-login">
            <form method="">
                  <label>Login:<input type="text" name="email" placeholder="Email">
                  <label>Senha:<input type="password" name="senha" placeholder="senha">
                  <input type="submit" name="acao" id="Logar"><br><br>
            </form>
            <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar Conta</a></p><br>
            <p><a href="<?php echo INCLUDE_PATH ?>registrar">esqueci a senha</a></p>
         </div><!---gorm-login -->
         
      </div>
  
</body>

</html>

