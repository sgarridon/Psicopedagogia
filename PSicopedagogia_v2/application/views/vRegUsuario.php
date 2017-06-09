<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->view("Header.php");?>
</head>

<body>
	<?php $this->load->view("BarraNavegacion.php");?>
	
	<h1 align="center">Agregar Usuarios</h1>
	<form action="cUsuarios/AgregarUsuario" method="POST">
		<table>
			<tr>
				<td><label>Rut</label></td>
				<td><input type="text" name="txtNumRut" width="8" size="8" maxlength="8" autofocus="autofocus"> 
				    <input type="text" name="txtDigRut" size="1" maxlength="1"></td>
			</tr>		
			<tr>
				<td><label>Nombres</label></td>
				<td><input type="text" name="txtNombre1" size="20" maxlength="20"></td>
				<td><input type="text" name="txtNombre2" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td><label>Apellidos</label></td>
				<td><input type="text" name="txtApellido1" size="20" maxlength="20"></td>
				<td><input type="text" name="txtApellido2" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td><label>Fecha nacimiento</label></td>
				<td><input type="date" name="datFecha"></td>
			</tr>
			<tr>
				<td><label>Tipo de Usuario</label></td>
				<td><select name="mnu_TipoUsuario">  
					<option value="1">Estudiante</option>
					<option value="2">Apoderado</option>
					<option value="3">Profesor</option>
					</select>
				</td>
			</tr>									
			<tr>
				<td><label>Email</label></td>
				<td><input type="email" name="txtEmail" size="20" maxlength="50"></td>
			</tr>
			<tr>
				<td><label>Contraseña</label></td>
				<td><input type="password" name="txtPassword" size="15" maxlength="15"></td>
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