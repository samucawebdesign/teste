<?PHP  
class Usuario
	{
		private $id;
		private $nome;
		private $email;
		private $senha;
		
		private $pdo;
		
		public function __construct($i = null)
			{
				try
					{
						$this->pdo = new PDO("mysql:dbname=test;host=localhost","root",'');
						$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # isso aqui só faz mostrar erros na query se houver
					}
				catch(PDOException $e)
					{
						echo 'Falha de conexão com o banco de dados: '.$e->getMessage();
					}
							
				if(!empty($i))
					{	
						$sql = 'select * from usuarios where id=?';
						$sql = $this->pdo->prepare($sql);
						$sql->execute(array($i));
						
						if($sql->rowCount() > 0)
							{
								$d = $sql->fetch();
								$this->id = $d['id'];
								$this->nome = $d['nome'];
								$this->email = $d['email'];
								$this->senha = $d['senha'];
							}
					}
			}
		
		public function getId()
			{
				$this->id;
			}
			
			
		public function setNome($n)
			{
				$this->nome = $n;
			}		
		public function getNome()
			{
				return $this->nome;
			}
			
			
		public function setEmail($e)
			{
				$this->email = $e;
			}		
		public function getEmail()
			{
				return $this->email;
			}
			
			
		public function setSenha($s)
			{
				$this->senha = md5($s);
			}
			
			
		public function salvar()
			{
				if(!empty($this->id))
					{
						$sql = "update usuarios set nome=?,senha=?,email=? where id=? ";
						$sql = $this->pdo->prepare($sql);
						$sql->execute(array($this->nome,$this->email,$this->senha,$this->id));
					}
				else
					{
						$sql = "insert into usuarios (nome,email,senha) values (?,?,?)";
						$sql = $this->pdo->prepare($sql);
						$sql->execute(array($this->nome,$this->email,$this->senha));
						
					}
			}
			
		public function delete()
			{
				$sql = "delete from usuarios where id=?";
				$sql = $this->pdo->prepare($sql);
				$sql->execute(array($this->id));
			}
	}
?>