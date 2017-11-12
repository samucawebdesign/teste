<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
    <script type="text/javascript">
	$(function(){
		$('#form').bind('submit',function(e)
			{
				e.preventDefault();
				var txt = $(this).serialize();
				$.ajax({
					type: 'GET',
					url: 'ajax_calcula.php',
					data: txt,
					success:function(resultado){
						$('.div1').html("Resultado: "+resultado);
					},
					error:function(){
						$('.div1').html('Ocorreum um erro, que droga kkkk');
					}
				})
			});
	});
	</script>
    
    <style type="text/css">
    .div1
		{
			width:300px;
			height:300px;
			background-color:#CCC;
		}
    </style>

  </head>
  <body>
  
  <form method="post" id="form">
	<label>Número 1</label>
    <input class="form-control" type="text" name="x">
    <label>Número 2</label>
    <input class="form-control" type="text" name="y">
    <input class="btn btn-primary" type="submit" value="Entrar">
  </form>
  
  <div class="div1"></div>
  
  
  
  </body>
</html>