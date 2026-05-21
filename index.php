<?php
include_once 'conexao.php';

if (isset($_FILES['foto'])) { 

    $origem = $_FILES['foto']['tmp_name'];

    if (!is_dir('images')) {
        mkdir('images', 0777, true);
    }

    $nomeArquivo = time() . "_" . $_FILES['foto']['name'];
    $destino = hash('md5',date('dmYhis')). $nomeArquivo;

    move_uploaded_file($origem, 'images/' .$destino);
    $sql = "INSERT INTO imagens (nome) VALUES ('$destino')";
    $res = $con->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>

<body>
    <h1>ENVIO DE DOCUMENTOS</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto">
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="listar.php">Listar Fotos</a>
</body>

</html>