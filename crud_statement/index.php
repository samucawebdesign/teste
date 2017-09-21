<?PHP  
require 'Usuarios.php';

$u = new Usuarios();
$res = $u->selecionar(2);
print_r($res);
#$u->inserir('Oliver','oli@samuca.eti.br',123);
#$u->atualizar(2,'Ciiiintia','cintia@samuca.eti.br',123);
$u->excluir(4);
?>