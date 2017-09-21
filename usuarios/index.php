<?PHP  
require 'Usuario.php';

# Inserindo novo usuário

/*
$usuario = new Usuario();
$usuario->setNome('Samuca');
$usuario->setEmail('teste@hotmail.com');
$usuario->setSenha('123');
$usuario->salvar();
*/



# Buscando usuário e mostrando informações
/*
$usuario = new Usuario(2);
echo 'Meu nome é '.$usuario->getNome().' e email é '.$usuario->getEmail();
*/


# Atualizando usuário
/*
$u = new Usuario(2);
$u->setNome('Cintia Ruckl Hantschel');
$u->salvar();
*/


# Excluindo usuário
$u = new Usuario(6);
$u->delete();
?>