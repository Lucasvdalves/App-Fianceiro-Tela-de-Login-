<?php include("Classes/Usuarios.php");

 require_once'Back-End App Finaceiro/Classes/Usuarios.php';
 $u = new usuario; 

?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loguin GX Finance</title>
        <link rel="stylesheet" href="loguin.css">
    </head>
    
    <body>
        <div id="corpo-cad">
            <strong><h1>Cadastra-se</h1></strong>
            <form method="post">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <input type="text"name="telefone" placeholder="Telefone"maxlength="30">
                <input type="email" name="email"placeholder="Usuário"maxlength="40">
                <input type="password"name="senha" placeholder="Senha"maxlength="15">
                <input type="password"name="confsenha" placeholder="Confirmar Senha"maxlength="15">
                <input type="submit" value="Cadastrar">
        
            </form>
        </div>
    
    //verificar se clicou no botao
    <?php

    if(isset($_POST['nome'])
    {
        $nome = addslashes( $_POST['nome']);
        $telefone = addslashes( $_POST['telefone']);
        $email = addslashes( $_POST['senha']);
        $confirmarsenha = addslashes( $_POST['confsenha']);
    
        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
        {
            $u->conectar("projeto_loguin","localhost","root","");
            if($u->msgErro == "")
            {
                if($senha == $confirmarsenha)
                {
                    if($u->cadastrar(#nome,$telefone,$email,$senha))
                    {
                          echo"cadastrado com sucesso! Acessepara entrar";
                    }
                    else
                    {
                        echo "Email ja cadastrado!";
                    }
                }
                 else
                 {
                     echo"Senha e confirmar senha não correspondem!";
                 }
            }
              else
              {
                  echo " Erro:" .$u->msgErro;
              }    
    
        }else
        {
            echo"Preencha todos os campos!";
        }
    }
    

    ?>
    </body>
    
    </html>