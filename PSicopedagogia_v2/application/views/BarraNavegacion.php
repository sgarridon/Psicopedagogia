 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PSicopedagogía</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url("index.php/cMenuInicio"); ?>">Inicio</a></li>
		<li><a href="<?php echo base_url("index.php/cPlantilla"); ?>">Gestor de Plantillas</a></li>
		<li><a href="<?php echo base_url("index.php/cActividadesEstudiante"); ?>">Gestor de Actividades para el Estudiante</a></li>
		<li><a href="<?php echo base_url("index.php/cUsuarios"); ?>">Gestor de Usuarios</a></li>
		<li><a href="<?php echo base_url("index.php/cLogin"); ?>">Cerrar sesión</a></li>
      </ul>
<!--       
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
-->
    </div>
  </div>
</nav>