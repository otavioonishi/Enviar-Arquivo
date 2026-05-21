<?php 
include_once 'conexao.php';

 $sql = 'SELECT * FROM imagens';
 $res = $con->query($sql);

 foreach($res as $row) {
     echo "<img src='images/{$row['nome']}'><br>";
    echo "<a href='deletar.php?id={$row['id']}'>Deletar Foto</a>";
 }
  ?>
  <br>
  <a href="index.php">Voltar</a> 