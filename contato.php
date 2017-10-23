<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="../bootstrap-3.3.5/css/bootstrap.css" />
<script src="../lib_util/js/jquery.js"></script>
<script src="../bootstrap-3.3.5/js/bootstrap.min.js"></script>
<style>

p, ul, li, a {
	color: #005411;
}

.resposta {
	
	color:#000;
}

.titulo{
	font-weight: bold;
	color: #005411;
}

.titulo-col {
	display: inline;
}

.oculto {
	display:none;
}

.brand_title:hover{
	color:#fff;
} 

</style>

<body>
		
		<nav class="navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">			
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
				<span class="navbar-brand brand_title">Estudos</span>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li ><a href="index.php">Home</a></li>
						<li><a href="bcwestminster.phtml">Recursos</a></li>
						<li class="active"><a href="contato.php">Contato</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-12 col-sm-6" style="height:100px">	
				</div>
					
					<div class="col-md-12">
						<div class="col-md-6">
							<form>
								
								<div class="form-group">
									<label for="StNome">Nome:</label>
									<input type="text" class="form-control" id="StNome" placeholder="Nome">
								</div>
								
								<div class="form-group">
									<label for="StEmail">Email:</label>
									<input type="email" class="form-control" id="StEmail" placeholder="Email">
								</div>
								
								<div class="form-group">
									<label for="StMensagem">Mensagem:</label>
									<textarea class="form-control" id="StMensagem" rows="6"></textarea>
								</div>
							
							</form>
						</div>
					</div>
			
			</div>
		
		</div>
		
</body>
</html>