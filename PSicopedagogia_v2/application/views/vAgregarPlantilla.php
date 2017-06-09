<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
	
		<?php $this->load->view("Header.php");?> 

		<script type="text/javascript">
			function valForm(){
				var val1 = false;
				var val2 = false;
				var val3 = false;
				var val4 = false;
				var val5 = false;
				var val6 = false;
				var val7 = flase;
				var error = 'Error en los siguientes datos: ';
				
				var TipAct = document.getElementById("id_TipoActividad").value;
				var DesAct = document.getElementById("id_Descripcion").value;
				var Resp1  = document.getElementById("id_Respuesta1").value;
				var Ptos1  = document.getElementById("id_Puntos1").value;
				var Imag1  = document.getElementById("fileToUpload1").value;
				
				if(TipAct == null)
				{	
					error = error + 'Tipo actividad ';
				} else {
					val1 = true; 
				}
		
				if((DesAct == null) || (DesAct.length<=10))
				{	
					error = error + 'Descripción actividad ';
				} else {
					val2 = true;
				}
				
				if(( (Resp1 != null) && (Ptos1 == null) ) || ( (Resp1 == null) && (Ptos1 != null) ))
				{
					error = error + 'Respuesta 1 ';
					alert('error reps 2');
				} else {
					val3 = true;
				}				

				if (val1 == false || val2 == false || val3 == false) {
					alert(error);
					return false;
				}
			}
		</script>	
	
	</head>
	
	<body>
	  	<?php $this->load->view("BarraNavegacion.php");?>
	  	  
	  	<div class="container"> 	
	  	  		<div class="panel panel-default">
				  	  <div class="panel-heading">
				  		<h2 align="center">Agregar una nueva Plantilla</h2>
				  	  </div>
				  	  
				  	  <div class="panel-body">  				  	  
				  	  		<form class="form-horizontal" role="form" action="<?php echo base_url("cPlantilla/AgregarPlantilla"); ?>" method="POST" onsubmit="return valForm()" enctype="multipart/form-data">
				  	  			<fieldset>
 									  <div class="form-group"> 
 									      <label class="col-sm-3 control-label">Tipo de actividad</label>  
										  <div class="col-sm-4">
											  <select class="form-control" name="inp_TipoActividad" id="id_TipoActividad">
											    <option value="1">Relacionar una sílaba en las imágenes</option>
											    <option value="2">Relacionar una letra en las imágenes</option>
											    <option value="3">Escribir una sílaba de la imagen</option>
											  </select>
										 </div>			    
 									  </div> 
 									  
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Descripción de la actividad</label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" name="inp_Descripcion" id="id_Descripcion" placeholder="Descripción general">
									    </div>
									  </div>
<!-- imagen 1 -->	
									  <div class="form-group">
									  	<div>
										    <label class="col-sm-3 control-label">Respuesta esperada</label>
										    <div class="col-sm-2">
										      <input type="text" class="form-control" name="inp_Respuesta1" id="id_Respuesta1">
										    </div>
									    </div>
									    <div>
										    <label class="col-sm-1 control-label">Puntos</label>
										    <div class="col-sm-1">
										      <input type="text" class="form-control" name="inp_Puntos1" id="id_Puntos1">
										    </div>
									    </div>
									    <div>
										  	<label class="col-sm-1 control-label">Imagen</label>
										  	<div class="col-sm-2">
												<input type="file"  name="fileImg1" id="fileToUpload1" onchange="upload_image();">
											</div>									    
									    </div>
									    <div class="upload-msg">
									  
									    </div>									    
									  </div>

<!-- imagen 2 -->	
									  <div class="form-group">
									  	<div>
										    <label class="col-sm-3 control-label">Respuesta esperada</label>
										    <div class="col-sm-2">
										      <input type="text" class="form-control" name="inp_Respuesta2" id="id_Respuesta2" placeholder="Respuesta correcta">
										    </div>
									    </div>
									    <div>
										    <label class="col-sm-1 control-label">Puntos</label>
										    <div class="col-sm-1">
										      <input type="text" class="form-control" name="inp_Puntos2" id="id_Puntos2" placeholder="Puntos">
										    </div>
									    </div>
									    <div>
										  	<label class="col-sm-1 control-label">Imagen</label>
										  	<div class="col-sm-2">
												<input type="file"  name="fileImg2" id="fileToUpload2" onchange="upload_image();">
											</div>									    
									    </div>
									    <div class="upload-msg">
									  
									    </div>									    
									  </div>

<!-- imagen 3 -->	
									  <div class="form-group">
									  	<div>
										    <label class="col-sm-3 control-label">Respuesta esperada</label>
										    <div class="col-sm-2">
										      <input type="text" class="form-control" name="inp_Respuesta3" id="id_Respuesta3" placeholder="Respuesta correcta">
										    </div>
									    </div>
									    <div>
										    <label class="col-sm-1 control-label">Puntos</label>
										    <div class="col-sm-1">
										      <input type="text" class="form-control" name="inp_Puntos3" id="id_Puntos3" placeholder="Puntos">
										    </div>
									    </div>
									    <div>
										  	<label class="col-sm-1 control-label">Imagen</label>
										  	<div class="col-sm-2">
												<input type="file"  name="fileImg3" id="fileToUpload3" onchange="upload_image();">
											</div>									    
									    </div>
									    <div class="upload-msg">
									  
									    </div>									    
									  </div>

<!-- imagen 4 -->	
									  <div class="form-group">
									  	<div>
										    <label class="col-sm-3 control-label">Respuesta esperada</label>
										    <div class="col-sm-2">
										      <input type="text" class="form-control" name="inp_Respuesta4" id="id_Respuesta4" placeholder="Respuesta correcta">
										    </div>
									    </div>
									    <div>
										    <label class="col-sm-1 control-label">Puntos</label>
										    <div class="col-sm-1">
										      <input type="text" class="form-control" name="inp_Puntos4" id="id_Puntos4" placeholder="Puntos">
										    </div>
									    </div>
									    <div>
										  	<label class="col-sm-1 control-label">Imagen</label>
										  	<div class="col-sm-2">
												<input type="file"  name="fileImg4" id="fileToUpload4" onchange="upload_image();">
											</div>									    
									    </div>
									    <div class="upload-msg">
									  
									    </div>									    
									  </div>

<!-- imagen 5 -->	
									  <div class="form-group">
									  	<div>
										    <label class="col-sm-3 control-label">Respuesta esperada</label>
										    <div class="col-sm-2">
										      <input type="text" class="form-control" name="inp_Respuesta5" id="id_Respuesta5" placeholder="Respuesta correcta">
										    </div>
									    </div>
									    <div>
										    <label class="col-sm-1 control-label">Puntos</label>
										    <div class="col-sm-1">
										      <input type="text" class="form-control" name="inp_Puntos5" id="id_Puntos5" placeholder="Puntos">
										    </div>
									    </div>
									    <div>
										  	<label class="col-sm-1 control-label">Imagen</label>
										  	<div class="col-sm-2">
												<input type="file"  name="fileImg5" id="fileToUpload5" onchange="upload_image();">
											</div>									    
									    </div>
									    <div class="upload-msg">
									  
									    </div>									    
									  </div>

									  <!--Para mostrar la respuesta del archivo llamado via ajax -->
									  <div class="form-group">
									      <center><button type="submit" class="btn btn-primary">Guardar</button></center>
									  </div>								  								
								</fieldset> 
							</form>
					  </div>
				</div>
		</div>
	
		<script>
			function upload_image()
					{	//Funcion encargada de enviar el archivo via AJAX
/*						$(".upload-msg").text('Cargando...'); */
						var inputFileImage = document.getElementById("fileToUpload");
						var file = inputFileImage.files[0];
						var data = new FormData();
						data.append('fileToUpload',file);
						
						/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
							data.append('file'+i, file);
						});*/
									
						$.ajax({
							url: "upload.php",        // Url to which the request is send
							type: "POST",             // Type of request to be send, called as method
							data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
							contentType: false,       // The content type used when sending data to the server.
							cache: false,             // To unable request pages to be cached
							processData:false,        // To send DOMDocument or non processed data file it is set to false
							success: function(data)   // A function to be called if request succeeds
							{
								$(".upload-msg").html(data);
								window.setTimeout(function() {
								$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
								$(this).remove();
								});	}, 5000);
							}
						});
						
					}
		</script>		
	</body>
</html>	