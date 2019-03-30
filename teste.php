<?PHP  
interface Animal
	{
		public function andar();
	}

class Cachorro implements Animal
	{
		public function andar()
			{
				echo 'Estou andando...';
			}
	}

$carhorro = new Cachorro();
$carhorro->andar();
if(isset($_GET['action']) and !empty($_GET['action']) and $_GET['action'] == 1)
	{
		echo '<br>deu boa!<br>';
	}
# Muito legal isso aqui
?>
