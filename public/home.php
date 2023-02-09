<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../public/assets/css/stylehome.php">
</head>
<body>

    <?php
        echo '<h3>'. $_SESSION['login'] .', bem-vindo! </h3>' ;
        echo '<p><a href="?logout">Encerrar a seção</a></p>';
    ?> 
     
</body>
</html>