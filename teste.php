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
?>
