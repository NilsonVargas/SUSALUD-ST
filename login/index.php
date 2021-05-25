<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar Sesión</title>
</head>
<body>
	<div class="contenedor">
		<div class="logo">	
			<img src="imagenes/2.png" alt="">	
		</div>	
		<h1 class="titulo">Iniciar Sesión</h1>
		
		<hr class="border">

		<form action="connect.php" method = "post" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="user" placeholder="User">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Password">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
	
		</form>


	</div>
</body>
</html>