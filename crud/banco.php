<?PHP  
class Banco
	{
		private $pdo;
		private $linhas;
		private $array_dados;
		
		public function __construct($host,$banco,$usuario,$senha)
			{
				try
					{
						$this->pdo = new PDO("mysql:dbname=".$banco.";host=".$host,$usuario,$senha);
					}
				catch(PDOException $e)
					{
						echo 'Não foi possível conectar ao banco de dados: '.$e->getMessage();
					}
			}
			
		public function query($sql)
			{
				$query = $this->pdo->query($sql);
				$this->linhas = $query->rowCount();
				$this->array_dados = $query->fetchAll();
			}
			
		public function linhas()
			{
				return $this->linhas;
			}
			
		public function result()
			{
				return $this->array_dados;
			}
			
		public function insert($tabela,$campos)
			{
				if(!empty($tabela) and (is_array($campos) and count($campos) > 0))
					{
						$sql = "insert into ".$tabela." ";
						$dados = array();
						$campos_tabela = array();
						foreach($campos as $chave => $valor)
							{
								$campos_tabela[] = $chave;
								$dados[] = "'".addslashes($valor)."'";
							}
						$sql .= '('.implode(", ",$campos_tabela).') VALUES ('.implode(", ",$dados).')';
						$this->pdo->query($sql);
						
						# OU FUNCIONA TAMBÉM ASSIM:
						/*
						$sql = "insert into ".$tabela." set ";
						$dados = array();
						foreach($campos as $chave => $valor)
							{
								$dados[] = $chave." = '".addslashes($valor)."'";
							}
						$sql = $sql.implode(", ",$dados);
						# echo $sql;
						$this->pdo->query($sql);
						*/
					}
			}
			
		public function update($tabela, $campos, $where = array(), $where_condicao = "AND")
			{
				if(!empty($tabela) and (is_array($campos) and count($campos) > 0))
					{
						$sql = "update ".$tabela." set ";
						$dados = array();
						foreach($campos as $chave => $valor)
							{
								$dados[] = $chave." = '".addslashes($valor)."'";
							}
						$sql .= implode(", ",$dados);
						if(count($where) > 0)
							{
								$dados = array();
								foreach($where as $chave => $valor)
									{
										$dados[] = $chave." = '".addslashes($valor)."'";
									}
								$sql .= ' where '.implode(" ".$where_condicao." ", $dados);
							}
						
						#echo $sql;
						$this->pdo->query($sql);
					}	
			}
			
		public function delete($tabela,$where = array(),$where_condicao = "AND")
			{
				if(!empty($tabela) and (is_array($where)) and count($where) > 0)
					{
						$sql = "delete from ".$tabela;
						if(count($where) > 0)
							{
								$dados = array();
								foreach($where as $chave => $valor)
									{
										$dados[] = $chave." = '".addslashes($valor)."'";
									}
								$sql .= ' where '.implode(" ".$where_condicao." ", $dados);
							}
						echo $sql;
						$this->pdo->query($sql);
					}
			}
	}
?>