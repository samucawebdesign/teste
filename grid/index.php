<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>

  <div class="container">
		<div class="row">
			<div class="col-sm-6 fundo1 text-right">Inicial | A Emprsea | ...</div>
			<div class="col-sm-6 fundo2 text-right">(47) 3633 7506 | (47) 98421 1481</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 fundo2">
				<div class="row">
					<div class="col-sm-12 fundo2">Logo aqui</div>
				</div>
			</div>
			<div class="col-sm-6 fundo1">
				<div class="row">
					<div class="col-sm-6 fundo2 text-right">0 itens<br>ver carrinho</div>
					<div class="col-sm-1 fundo1 text-right"></div>
					<div class="col-sm-5 fundo2 text-right">Minha conta</div>
				</div>
				<br>
				<div class="row form-control form-inline">
					<div class="col-sm-12 fundo2 text-right">
						<input class="form-control" name="key" type="text" id="key" value="" size="40" maxlength="100" placeholder="Pesquisar" />
					
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span> Buscar
						</button>
					</div>
				</div>
			</div>
		</div>
  </div>

  <br>

  <div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center">Novidades | Casa | Jardim | Decoração | Cozinha | Promoções </div>
	</div>
  </div>

  <br>

	<div class="container">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagens/certificado.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="imagens/certificado.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="imagens/certificado.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	</div>

	<br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 text-center"><span class="glyphicon glyphicon-picture"></span><br>descricao</div>
			<div class="col-sm-3 text-center"><span class="glyphicon glyphicon-picture"></span><br>descricao</div>
			<div class="col-sm-3 text-center"><span class="glyphicon glyphicon-picture"></span><br>descricao</div>
			<div class="col-sm-3 text-center"><span class="glyphicon glyphicon-picture"></span><br>descricao</div>
		</div>
	</div>
	
	<br>

	<div class="container">
		<?php
		for($i=0;$i<15;$i++)
			{
				?>
				<div class="col-md-3 col-sm-4 text-center"><span class="glyphicon glyphicon-picture"></span><br>PRODUTO</div>
				<?PHP
			}
		?>
	</div>

	<br>

	<div class="container">
		<div class="row form-control form-inline">
			<div class="col-sm-6"><span class="glyphicon glyphicon-picture"></span>Inscreva-se para saber das novidades<br>Cadastre seu e-mail ao lado</div>
			<div class="col-sm-6 text-right"><input class="form-control inline" type="text"> <input class="form-control" type="text"> <button class="btn btn-default">Enviar</button></div>
		</div>
	</div>	
	<br>
	<div class="container">
		<div class="row form-control form-inline">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<strong>Sobre nós</strong><br>
						Como comprar<br>
						Formas de pagamento<br>
						Políticas de frete<br>
						Termos e condições gerais
						</div>
					<div class="col-sm-6">
						<strong>Atendimento</strong><br>
						Como comprar<br>
						Formas de pagamento<br>
						Políticas de frete<br>
						Termos e condições gerais
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">Formas de pagamento</div>
				</div>
			</div>
			<div class="col-sm-4 text-right">Imagem cavalo</div>
		</div>
	</div>	

	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 funto1">Nome empresa | CNPJ: 234234234234234 | SBS, SC</div>
			<div class="col-sm-6 text-right fundo2">by Samuca</div>
		</div>
	</div>
    
    <script type="text/javascript">

	</script>
    
  </body>
</html>