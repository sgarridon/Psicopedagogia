<!DOCTYPE html>
<html>
	<head>

		<?php $this->load->view("Header.php");?>
		
	</head>

	<body>
	  <div class="fondo">
		<div class="container-fluid">	
			<div>
				<h1 align="center">Sistema para el tratamiento de trastornos del aprendizaje</h1>
				<h2 align="center">Dislexia</h2>
			</div>
			
			<div class="container">
			    <div class="row vertical-offset-100">
			    	<div class="col-md-4 col-md-offset-4">
			    		<div class="panel panel-default">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Identificación</h3>
						 	</div>
						  	<div class="panel-body">
						    	<form accept-charset="UTF-8" role="form" action="cLogin/fun_ValidarUsuario" method="POST">
				                    <fieldset>
							    	  	<div class="form-group">
							    		    <input class="form-control" placeholder="E-mail" name="input_email" type="text">
							    		</div>
							    		<div class="form-group">
							    			<input class="form-control" placeholder="Contraseña" name="input_password" type="password" value="">
							    		</div>
							    		<div class="checkbox">
							    	    	<label>
							    	    		<input name="remember" type="checkbox" value="Remember Me"> Recordarme
							    	    	</label>
							    	    </div>
							    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar">
							    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
				</div>
			</div>
    	</div>
      </div>	
    	<?php $this->load->view("FooterBootstrap.php");?> 		
	</body>
</html>