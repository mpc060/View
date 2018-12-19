<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>| Redefinir Senha Usuário SOLID | </title>
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
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>  
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form  method="post" action="redefinir_senha.php" id="login">
                            <h1>Redefinir Senha</h1>
                            <div>
                                <label>Digite seu email para redefinir sua senha</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                        <div>
                            <input type="hidden" name="operacao" value="verificar" />                               
                            <button type="submit" class="btn btn-default submit">Enviar</button>
                        </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />
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