<?php
  $codigo = $_GET['codigo'];
  if ($codigo != "2PV5KL"){
    echo "<script>alert('Código Inválido');";
    echo "javascript:window.location='conexao.php';</script>";
  }else{
    echo "<script>javascript:window.location='principal.php';</script>";
  }
?>