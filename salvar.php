<?php 

$dir = 'recados/';
if (!is_dir( $dir ))
    mkdir($dir);

if ( strlen($_POST['nome']) > 3 && strlen($_POST['nome']) < 50 )
$filename = $dir . date('Ymd') . time() . $_POST['nome'] . '.txt';
$texto = $_POST['nome'] . ': ' . $_POST['mensagem'];
file_put_contents($filename, $texto);
header('Location: https://jahnkesiqueira.com.br' );
?>