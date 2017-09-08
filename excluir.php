<?PHP  
if($_SERVER['SERVER_NAME'] == "localhost" or $_SERVER['SERVER_NAME'] == "samuca" or $_SERVER['SERVER_NAME'] == "samuca-pc")
	{
		$host = "localhost";
		$usuario = "root";
		$passwd = "";
		$bd = "projeto_servico_campo";
	}
else
	{
		$host = "localhost";
		$usuario = "phpi_campo";
		$passwd = "p4h6p@i9";
		$bd = "phpi_campo";
	}

# dsn = Data Source Name (Nome de Fonte de Dados)
$dsn = "mysql:dbname=$bd;host=$host";
try
	{
		$pdo = new PDO($dsn,$usuario,$passwd);
		$desc_ter = 'ABACAXI';
		$sql = "delete from tb_territorio where id_ter=12";
		$pdo->query($sql);
		echo 'Deletado!';
	}
catch(PDOException $e)
	{
		echo "Oops! ".$e->getMessage();
	}
?>














