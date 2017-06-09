<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->view("Header.php");?>
</head>

<body>
	<?php $this->load->view("BarraNavegacion.php");?>
	
	<h1 align="center">Crear actividad Dislexia para un Estudiante</h1>
	
	<form action="cActividadesEstudiante/AgregarActividad" method="POST">
		<table>
			<tr>
				<td><label>Rut del Estudiante</label></td>
				<td><input type="text" name="txtNumRut" size="8" maxlength="8" autofocus="autofocus"></td>
			</tr>		
			<tr>
				<td><label>ID Plantilla</label></td>
				<td><input type="text" name="txtIdPlantilla" size="5" maxlength="5"></td>
			</tr>
			<tr>
				<td><label>Tipo de actividad</label></td>
				<td><input type="text" name="txtTipoActividad" size="8" maxlength="8" autofocus="autofocus"></td>
			</tr>		
			<tr>
				<td><label>Descripcion</label></td>
				<td><input type="text" name="txtDescripcion" size="100" maxlength="20"></td>
			</tr>
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
	</form>
	
	<?php $this->load->view("FooterBootstrap.php");?>
	
</body>
</html>