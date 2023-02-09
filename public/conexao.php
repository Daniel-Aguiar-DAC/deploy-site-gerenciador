<?php
$dsn = 'mysql:host=aws-sa-east-1.connect.psdb.cloud;dbname=gerenciador;port=3306';
$user = "jvrtu3u0a908p2dpb183";
$dbP = "pscale_pw_URZyBAHZ266AdetfcFFMGZCwKjiSNLLkUwe5lQOlHLO";
$options = array(
    1009 => "/etc/ssl/cert.pem",
    1014 => false,
);
try {
    $PDO = new PDO($dsn, $user, $dbP, $options);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao banco de dados";

} catch (PDOException $error) {
    $msg = $error->getMessage();
    echo "Erro! Não foi possível conectar ao banco de dados: ".$msg;
}


/* select

$email = 'daniel.aguiar.costa@gmail.com';
$email = '%' . $email . '%';
$sql = "SELECT * FROM usuarios where email like '" . $email . "'";
$result = $PDO->query( $sql );
$rows = $result->fetchAll(PDO::FETCH_ASSOC);
 
print_r( $rows );

/* select */



/* 
site: 

https://imasters.com.br/back-end/como-usar-pdo-com-banco-de-dados-mysql

*/