<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!–Con esto garantizamos que se vea bien en dispositivos móviles–> 
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!–Llamamos al archivo CSS –> 	
    
 </head>

<body>
	<h1 align="center">Administración de plantillas para la Dislexia</h1>
	<form action="cPlantilla/AgregarPlantilla" method="POST">
	
	<!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
    <?=@$error?>
    <span><?php echo validation_errors(); ?></span>
    <?=form_open_multipart(base_url()."cPlantilla/do_upload")?>
    
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Tipo de Actividad</th>
            <th>Descripción</th>
            <th>Detalle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Rocky</td>
            <td>Balboa</td>
            <td>rockybalboa@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>
    
    
    
    
		<table>
			<tr>
				<td><label>Tipo de actividad</label></td>
				<td><label>Descripcion</label></td>
				<td><select name="mnu_TipoPlantilla">  
					<option value="1">Relacionar una sílaba con imágenes</option>
					<option value="2">Relacinar una letra con imágenes</option>
					<option value="3">Escritura de sílabas de imágenes</option>
					</select>
				</td>
				<td><input type="text" name="txtDescripcion" size="100" maxlength="20"></td>
			</tr>
		</table>
		<h1>Detalle</h1>	
		<table>	
			<tr>
				<td><label>Respuesta correcta</label></td>
				<td><input type="text" name="txtRespuesta" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td><label>Puntos</label></td>
				<td><input type="text" name="txtPuntos"></td>
			</tr>
			<tr>
				<td><label>Imagen</label></td>
				<td><input type="text" name="imgActividad"></td>
			</tr>									
			<tr>
				<td colspan="2"><input type="submit" value="Agregar">
				                <input type="submit" value="Cancelar"></td>
			</tr> 
		</table>
		<?=form_close()?>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –> 
    <script src="js/bootstrap.min.js"></script> <!– Llamamos al JavaScript de Bootstrap –> 
</body>

</html>