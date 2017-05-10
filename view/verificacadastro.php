<?php
  $dtnasc = $_POST['dtNasc'];

list($ano, $mes, $dia) = explode('/', $dtnasc);

$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

  if ($idade < 18){
    echo "<script>alert('Voce deve ter pelo menos 18 anos para efetuar um cadastro');";
    echo "javascript:window.location='cadastro.php';</script>";
  }else{
      echo "<script>javascript:window.location='index.php';</script>";
  }
?>