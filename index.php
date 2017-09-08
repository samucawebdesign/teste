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
		$passwd = "xxxxx";
		$bd = "phpi_campo";
	}

# dsn = Data Source Name (Nome de Fonte de Dados)
$dsn = "mysql:dbname=$bd;host=$host";
try
	{
		$pdo = new PDO($dsn,$usuario,$passwd);
		$sql = "select * from tb_territorio where id_ter=89898";
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0)
			{
				foreach($sql->fetchAll() as $d)
					{
						echo $d['id_ter'].' - '.$d['desc_ter'].'<br>';
					}
			}
		else
			{
				echo 'Nenhum resultado encontrado';
			}
	}
catch(PDOException $e)
	{
		echo "Oops! ".$e->getMessage();
	}
?>














