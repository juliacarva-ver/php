<?php 

//arquivo essencias (nunca podem faltar)
require_once "conexao.php";
require_once "funcoes.php";

//partes visuais 
include "header.php";
include "menu.php";


//simulacao de usuario
$usuario ="julia";
?>

<h1><?php echo $nomeSistema; ?></h1>

<p><<?php echo saudacao($usuario); ?></p>

<p>Data de acesso: <?php echo $dataHoje; ?></p>

<?php 
include "footer.php";
?>