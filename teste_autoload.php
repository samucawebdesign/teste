<?php 
spl_autoload_register(function($classe){
	require 'classes/'.$classe.'.php';
});

$cavalo = new Cavalo();
$cavalo->falar();
echo '<br>';
$p = new Pessoa();
$p->andar();
?>