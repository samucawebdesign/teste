<?PHP  
session_start();
require 'config.php';
require 'Language.php';
if(!empty($_GET['lang']))
	{
		$_SESSION['lang'] = $_GET['lang'];
	}
$lang = new Language();
?>
Linguagem definida: <?PHP echo($lang->getLanguage()); ?>
<br>
<br>
<a href="index.php?lang=en">English</a> | <a href="index.php?lang=pt-br">Português</a> | <a href="index.php?lang=es">Espanol</a>
<hr>
<button><?PHP echo($lang->get('BUY')); ?></button> | <button><?PHP echo($lang->get('LOGOUT')); ?></button>
<br>
Categoria: <?PHP $lang->get('CATEGORIA_PHOTO'); 
?>
<br>
<br>
<?PHP  
$sql = "select id,(select valor from lang where lang.lang=:lang and lang.nome=categorias.lang_item) as nome from categorias";
$sql = $pdo->prepare($sql);
$sql->bindValue(":lang",$lang->getLanguage());
$sql->execute();
if($sql->rowCount() > 0)
	{
		foreach($sql->fetchAll() as $categoria)
			{
				echo $categoria['nome'].'<br>';
			}
	}
?>