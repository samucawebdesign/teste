<?PHP  
require_once('Banco.php');
### Conectar
$banco = new Banco('localhost','projeto_servico_campo','root','');
$banco->query("select * from tb_rua");
$total = $banco->linhas();
$total_reg = 3;
$total_pag = $total / $total_reg;
if(isset($_GET['p']) and !empty($_GET['p']))
	{
		$p = $_GET['p']*$total_reg;
	}
else
	{
		$p = 0;
	}
echo "<br>select * from tb_rua order by id_rua limit $p,$total_reg<br>";
### Listar
$banco->query("select * from tb_rua order by id_rua limit $p,$total_reg");
echo 'linhas: '.$banco->linhas().'<br>';

if($banco->linhas() <= 0)
	{
		echo 'nenhum resultado encontrado';
	}
else 
	{
		foreach($banco->result() as $d)
			{
				echo 'Territórios: '.$d['desc_rua'].'<br>';
			}
	}
echo '<br>';
for($i=0;$i<=$total_pag;$i++)
	{
		?>
		<a href="?p=<?PHP echo($i); ?>">[ <?PHP echo($i+1); ?> ]</a>
		<?PHP
	}
	
### Inserir
/*
$banco->insert('tb_rua',array(
	"id_ter" => 1,
	"desc_rua" => 'Rua Abacaxi'
));
echo 'Inserido com sucesso';
*/

### Atualizar
#$banco->update('tb_rua',array('desc_rua'=>'Maçã'),array('id_rua'=>7));
# usando OR
# $banco->update('tb_rua',array('id_rua'=>1,'desc_rua'=>'Mação'),array('id_rua'=>7,'desc_rua'=>'ok'),'or');


### Deletar
#$banco->delete('tb_rua',array('id_rua'=>29),'or');
#$banco->delete('tb_rua',array('id_rua'=>29,'desc_rua'=>'teste'),'or');

?>