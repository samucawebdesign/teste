<?PHP  
class Usuarios
	{
		private $db;
		
		public function __construct()
			{
				try
					{
						$this->db = new PDO("mysql:dbname=test;host=localhost","root","");
					}
				catch(PDOException $e)
					{
						echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
						die;
					}
			}
			
		public function selecionar($id)
			{
				$sql = $this->db->prepare("select * from usuarios where id=:id");
				$sql->bindValue(":id",$id);
				$sql->execute();
				
				$array = array();
				if($sql->rowCount() > 0)
					{
						$array = $sql->fetchAll();
					}
				return $array;
			}
			
		public function inserir($nome,$email,$senha)
			{
				$sql = $this->db->prepare("insert into usuarios (nome,email,senha) values (:nome,:email,:senha)");
				$sql->bindParam(":nome",$nome);
				$sql->bindParam(":email",$email);
				$sql->bindValue(":senha",md5($senha));
				$sql->execute();
			}
			
		public function atualizar($id,$nome,$email,$senha)
			{
				$sql = $this->db->prepare("update usuarios set nome=?,email=?,senha=? where id=?");
				$sql->execute(array($nome,$email,md5($senha),$id));
			}
			
		public function excluir($id)
			{
				$sql = $this->db->prepare("delete from usuarios where id=?");
				$sql->bindValue(1,$id);
				$sql->execute();
			}
	}
?>