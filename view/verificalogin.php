<?php
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  if ($email != "joaoteste@2ofus.com" || $senha != "2ofus"){
    echo "<script>alert('Dados inválidos');";
    echo "javascript:window.location='index.php';</script>";
  }else{
      echo "<script>javascript:window.location='conexao.php';</script>";
  }
?>