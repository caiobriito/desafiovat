<?php

//require_once 'pdoconfig.php';
 
//try {
    $conn = new mysqli("127.0.0.1", "root", "root", "mydatabase");


if($conn->connect_error){
    echo $conn->connect_error;
}

    //echo "Conectado a $dbname em $host com sucesso.";
//} catch (PDOException $pe) {
   //die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
//}
//echo "Connected successfully";
//mysqli_close($conn);



$solicitante =$_POST['solicitante'];
$ocorrencia =$_POST['ocorrencia'];
$descricao =$_POST['descricao'];
$mensagem = "Preencha os dados do Formulario";

$sql="INSERT INTO ordem(solicitante,ocorrencia,descricao) VALUES ('$solicitante','$ocorrencia','$descricao')";
    //$stm->bindParam('solicitante',$solicitante);
    //$stm->bindParam('ocorrencia',$ocorrencia);
    //$stm->bindParam('descricao',$descricao);
    //$stm->exec();
//if(mysqli_query($conn, $sql)){
   // echo "CRIADO COM SUCESSO";

//}
//else{
//echo "erro".msqly_connect_error($conn);
//}
//  mysqli_close($conn);  
//}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDEM DE SERVIÇO</title>
    <link href="./estilo.css", rel="stylesheet">
</head>
<body>




    <main>
        <form method="post">
            <label>Solicitante</label>
            <input type="text" name="solicitante" required />
            <label>Ocorrencia</label>
            <input type="text" name="ocorrencia" required />
            <label>Descrição</label>
            <input type="text" name="descricao" required />
            <button type="submit">Registrar</button>
        
        </form> 
        <div class="Mensagem">
            <?=$mensagem?>
    </main>
    
</body>
</html>