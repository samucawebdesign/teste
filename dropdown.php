<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container-fluid">
        	<div class="navbar-header">
            	<img src="imagens/jaguar.jpg" class="nav navbar-brand">
            </div>
        	<ul class="nav navbar-nav">
            	<li><a href="#">Home</a></li>
                <li class="dropdown">
                	<a class="dropdown-toggle" data-toggle="dropdown" href="#"  >Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                    </ul>
                </li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        	<ul class="nav navbar-nav navbar-right">
            	<li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </nav>
    <br>
<br>
<br>
<br>

    
  
  	<div class="container">
		<div class="dropdown">
        	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Teste <span class="caret"></span></button>
            <ul class="dropdown-menu">
            	<li class="dropdown-header">Títulos</li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">PHP</a></li>
                <li class="divider"></li>
                <li><a href="#">PHP</a></li>
            </ul>
            
        </div>
	</div>
    
    <div class="text-center">
        <div class="pagination">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </div>
    </div>    
    
    <div class="pager">
    	<li class="previous"><a href="#">Anterior</a></li>
        <li class="next"><a href="#">Anterior</a></li>
    </div>
    <br>

<form name="form1" method="post" action="/contato/enviar" onsubmit="return valida_campos();" >
            * Assunto
            <select name="assunto" id="assunto" class="form-control">
              <option value="Comercial">Comercial</option>              
              <option value="Serviços">Serviços</option>
              <option value="Treinamentos">Treinamentos</option>
              <option value="Dúvidas">Dúvidas</option>
              <option value="Informações">Informações</option>              
          </select>
          
			<div class="row">
            	<div class="col-md-2">
            * Nome<br />
            <input name="nome" type="text" id="nome" size="25" maxlength="50" style="width:100%;" class="form-control" />
</div>
            </div>
            <br />
            * E-mail<br />
            
            <input name="email" type="text" id="email" size="25" maxlength="100" style="width:100%;" class="form-control" />
            <br />
            * Telefone<br />
            <input name="telefone" type="text" id="telefone" size="25" maxlength="50" style="width:100%;" class="form-control" />
            <br />
            * Mensagem<br />
            <textarea name="mensagem" cols="23" rows="5" id="mensagem" style="width:100%;" class="form-control"></textarea>
            <br />
            <input name="news" type="checkbox" id="news" checked="checked" class="form-control" />
    Aceito receber informativos da 
        <br />
            <br /> 
              <input type="submit" name="button2" id="button2" value="Enviar" class="form-control" />
            <br />
		  <script type="text/javascript">
          if(document.getElementById('assunto').value == 'Senha de acesso para produtos'){mostra_esconde_div_geral(1,'divCNPJ');}else{mostra_esconde_div_geral(0,'divCNPJ');}
          </script>
          </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  </body>
</html>