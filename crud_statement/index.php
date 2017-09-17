<?PHP  
require_once('Banco.php');
### Conectar
$banco = new Banco('localhost','projeto_servico_campo','root','');

### Listar
$banco->query('select * from tb_territorio');
echo 'linhas: '.$banco->linhas().'<br>';
if($banco->linhas() <= 0)
	{
		echo 'nenhum resultado encontrado';
	}
else 
	{
		foreach($banco->result() as $d)
			{
				echo 'Territórios: '.$d['desc_ter'].'<br>';
			}
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
$banco->update('tb_rua',array('desc_rua'=>'Maçã'),array('id_rua'=>7));
# usando OR
# $banco->update('tb_rua',array('id_rua'=>1,'desc_rua'=>'Mação'),array('id_rua'=>7,'desc_rua'=>'ok'),'or');


### Deletar
$banco->delete('tb_rua',array('id_rua'=>29),'or');
#$banco->delete('tb_rua',array('id_rua'=>29,'desc_rua'=>'teste'),'or');

?>