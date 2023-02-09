<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>index</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])){
            
            if(isset($_POST['acao'])){
                // vamos validar
                               
                $emailform = $_POST['email'];
                $senhaform = $_POST['senha'];

                if(strlen($emailform) > 0 && strlen($senhaform) > 0){
                
                    include('conexao.php'); // conexão com bd    

                    $email = $emailform;
                    $sth = $PDO->prepare("SELECT email, senha, nome FROM usuarios where email like '" . $email . "'");
                    $sth->execute();
                    $senhabd = $sth->fetchColumn(1); // busca o valor da 2ª coluna (senha) do bd
                    
                    $sth = $PDO->prepare("SELECT email, senha, nome FROM usuarios where email like '" . $email . "'");
                    $sth->execute();
                    $nomebd = $sth->fetchColumn(2); // busca o valor da 2ª coluna (senha) do bd
                    print("senha = $nomebd\n");
                      
                    if($senhaform == $senhabd){
                        //print("usuário autenticad");
                        $_SESSION['login'] = $nomebd;
                        header('Location: index.php');
                    }

                }
                
            }                   
         
            include('login.php');
            }else{
                if(isset($_GET['logout'])){
                    unset($_SESSION['login']);
                    session_destroy();
                    header('Location: index.php');
                }
                include('home.php');
        }       
    ?>
    
</body>
</html>