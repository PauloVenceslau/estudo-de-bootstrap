<html>
	<head>
		<title> Meu site</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="estlo.css">
	  <script src="../bootstrap/js/jquery.min.js"></script>
	  <script src="../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>

	<body>
		<!--CABEÇALHO-->
		<div id="cab-color" class="container-fluid"> 
			<div class="container">
				<div id="cab" class="row">
				<div class="col-sm-4">
					<img src="../imagens/logo.pgn.png" class="img-responsive" />
				</div>
				<div class="col-sm-8 text-right">
					<h4 class="texto-cab font-italict">Meu site mini curso bootstrap </h4>
				</div>
				</div> 
			</div>  
		</div> 
		<!--MENU-->
		 <nav class="navbar navbar-inverse">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="index.php"><a href="#">inicio</a></li>
		        <li><a href="empresa.php">empresa</a></li>
		        <li><a href="produtos.php">produtos</a></li>
		        <li><a href="contatos.php">contatos</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> WampServer</a></li>
		        <!--li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li-->
		      </ul>
		    </div>
		  </div>
		</nav> 

		<!--CORPO DO SITE-->
	<div id="corpoinicio" class="container">

		<div class="well">
			<div class="row">
				<div class="col-sm-4">
					<center>
					  <img src="../imagens/contato.png" class="img-responsive">
					</center>
				</div>
					<div class="col-sm-8">
						<!--inicio formulario-->
					 <form class="form-horizontal" role="form" action="../phpmailer/envia-email.php" method="post">
					 	<!--nome-->
					<div class="form-group">
					    <label class="control-label col-sm-2" for="nome">Nome:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="nome" name="nome">
					    </div>
					 </div>
					 	<!--EMAIL-->
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Email:</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="email" name="email">
					    </div>
					  </div>
					  	<!--ASSUNTO-->
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="assunto">Assunto:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="assunto" name="assunto">
					    </div>
					  </div>
					  	<!--MENSAGEM-->
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
					    <div class="col-sm-10">
					      	<textarea class="form-control" id="mensagem" rows="5" name="mensagem"></textarea>
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Enviar</button>
					    </div>
					  </div>
					</form> 
			<!--final formulario-->
				</div>
			</div>
			
		</div>

	</div>
		<div id="rodape" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h5 class="texto-branco text-center">Desenvolvido por Paulo da Silva - 2018</h5>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>