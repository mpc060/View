<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>| Login de Usuário SOLID | </title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="animate/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form  method="post" action="login.php" id="login">
                            <h1>Login</h1>
                            <div>
                                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit">Entrar</button>
                                <a class="reset_pass" href="redefinir_senha.php">Perdeu a Senha?</a>
                            </div>
                            <div class="separator">
                                <div class="clearfix"></div><br/>
                                <div>
                                    <h1>SOLID Sistema de Gestão</h1>
                                    <p>©2016 All Rights Reserved. Privacy and Terms</p>
                                </div>
                            </div>
                       </form>
                  </section>
                </div>
          </div>
        </div>
    </body>
</html>