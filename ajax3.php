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
		$('button').bind('click',function()
			{
				$.get('teste.php?action=1',function(t)
					{
						$('.div1').html(t);
					});
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
  <div class="div1"></div>
  
  <button>Executar ajax</button>
  
  </body>
</html>