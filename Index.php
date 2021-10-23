<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"  media="screen"/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>Servicio Web</title>
  </head>
  <body background="imagenes/motos.jpg">
    
    <header></header> <!--Sin encabezado-->
   	<div id="main" class="container-fluid"> <!--Main principal-->
   		<br/>
   		<br/>
      	<br/>
   		<h1>¿Qué desea realizar?</h1>
   		<br/>
   		<br/>
   		<br/>
   		<div class="row">
   			<div class="col-md-3">
   				<button class="btn btn-primary btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
    			Leer registros
  				</button>
   			</div>
   			<div class="col-md-3">
   				<button class="btn btn-primary btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
    			Insertar registros
  				</button>
   			</div>
   			<div class="col-md-3">
   				<button class="btn btn-primary btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
    			Modificar registros
  				</button>
   			</div>
   			<div class="col-md-3">
   				<button class="btn btn-primary btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
    			Eliminar registros
  				</button>
   			</div>
   		</div>
   		<div class="row">
   			<div class="col-md-12"> <!--Sección de los formularios-->
   				<div class="collapse" id="collapse1"> <!--Mostrar datos-->
  				<div class="card card-body">
    			<form id="Formulario" method="POST">
    				<input type="hidden" id="proVar" name="proVar" value="1">
    				<button type="button" id="Enviar" class="btn btn-primary btn-dark">Enviar</button>
    			</form>
  				</div>
				</div> <!--FIN Mostrar datos-->

				<div class="collapse" id="collapse2"> <!--Insertar registros-->
  				<div class="card card-body">
  				<form id="Formulario1" method="POST">
  					<input type="hidden" id="proVar" name="proVar" value="2">
  					<div class="row">
  					<div class="col-md-3">
    					<label for="nombre" class="form-label">Nombre</label>
    					<input type="text" class="form-control" id="nombre" name="nombre">
  					</div>
  					<div class="col-md-3">
    					<label for="modelo" class="form-label">Modelo</label>
    					<input type="text" class="form-control" id="modelo" name="modelo">
  					</div>
  					<div class="col-md-3">
    					<label for="marca" class="form-label">Marca</label>
    					<input type="text" class="form-control" id="marca" name="marca">
  					</div>
  					<div class="col-md-3">
    					<label for="cilindrada" class="form-label">Cilindrada</label>
    					<input type="text" class="form-control" id="cilindrada" name="cilindrada">
  					</div>
  					</div>
  					<br/>
  					<button type="button" id="Enviar1" class="btn btn-primary btn-dark">Enviar</button>
  				</form>
  				</div>
				</div> <!--FIN Insertar registros-->

				<div class="collapse" id="collapse3"> <!--Modificar los datos registros-->
  				<div class="card card-body">
    			<form id="Formulario2" method="POST">
    				<input type="hidden" id="proVar" name="proVar" value="3">
    				<div class="row">
    				<div class="col-md-3">
    					<label for="idmoto" class="form-label">Id</label>
    					<input type="text" class="form-control" id="idmoto" name="idmoto">
  					</div>	
  					<div class="col-md-2">
    					<label for="nombre" class="form-label">Nombre</label>
    					<input type="text" class="form-control" id="nombre" name="nombre">
  					</div>
  					<div class="col-md-2">
    					<label for="modelo" class="form-label">Modelo</label>
    					<input type="text" class="form-control" id="modelo" name="modelo">
  					</div>
  					<div class="col-md-2">
    					<label for="marca" class="form-label">Marca</label>
    					<input type="text" class="form-control" id="marca" name="marca">
  					</div>
  					<div class="col-md-3">
    					<label for="cilindrada" class="form-label">Cilindrada</label>
    					<input type="text" class="form-control" id="cilindrada" name="cilindrada">
  					</div>
  					</div>
  					<br/>
  					<button type="button" id="Enviar2" class="btn btn-primary btn-dark">Enviar</button>
    			</form>
  				</div>
				</div>

				<div class="collapse" id="collapse4"> <!--Eliminar los datos registros-->
  				<div class="card card-body">
    			<form id="Formulario3" method="POST">
    				<input type="hidden" id="proVar" name="proVar" value="4">
    				<div class="row">
    				<div class="col-md-4"></div>		
    				<div class="col-md-4">
    					<label for="idmoto" class="form-label">Id</label>
    					<input type="text" class="form-control" id="idmoto" name="idmoto">
  					</div>
  					<div class="col-md-4"></div>	
  					</div>
  					<br/>
  					<button type="button" id="Enviar3" class="btn btn-primary btn-dark">Enviar</button>
    			</form>
  				</div>
				</div>

   			</div> <!--Fin seccion de los formularios-->
   		</div>
   		<div class="row" id="colorespuesta">
   			<br/>
   			<div id="respuesta" class="col-md-12"></div>
   		</div>
   		</div><!--Aqui termina el main principal-->
   	<footer></footer>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
  <script>
  	$('#Enviar').click(function(){
  		$.ajax({
  			url:'Cliente.php',
  			type: 'POST',
  			data: $('#Formulario').serialize(),
  			success: function(res){
  				$('#respuesta').html(res);
  			} 
  		});
  	});
  </script>
  <script>
  	$('#Enviar1').click(function(){
  		$.ajax({
  			url:'Cliente.php',
  			type: 'POST',
  			data: $('#Formulario1').serialize(),
  			success: function(res){
  				$('#respuesta').html(res);
  			} 
  		});
  	});
  </script>
   <script>
  	$('#Enviar2').click(function(){
  		$.ajax({
  			url:'Cliente.php',
  			type: 'POST',
  			data: $('#Formulario2').serialize(),
  			success: function(res){
  				$('#respuesta').html(res);
  			} 
  		});
  	});
  </script>
  <script>
  	$('#Enviar3').click(function(){
  		$.ajax({
  			url:'Cliente.php',
  			type: 'POST',
  			data: $('#Formulario3').serialize(),
  			success: function(res){
  				$('#respuesta').html(res);
  			} 
  		});
  	});
  </script>
</html>