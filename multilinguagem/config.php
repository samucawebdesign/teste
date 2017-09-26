<?PHP  
try
	{
		global $pdo;
		$pdo = new PDO("mysql:dbname=test;host=localhost",'root','');
	}
catch(PDOException $e)
	{
		echo 'falha de conexão no banco '.$e->getMessage();
		exit;
	}
?>