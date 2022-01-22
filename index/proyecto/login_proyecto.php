<?php
	//Si no tienes sesion te reenvia a la pagina principal

	session_start();
	if(!isset($_SESSION['usuario'])){
		echo '
			<script>
				alert("No puede entrar a la pagina sin iniciar sesión");
				window.location = "../index.php";
			</script>
		';
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - Kanban</title>

    <!--estilo extraido de https://fonts.googleapis.com recomendable no borrar para no peder el marco del diseño-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--estilo que se uso como ejemplo, no necesariamente se tiene que trabajar con este archivo, pero si consequir un diseño similar-->
    <link rel="stylesheet" href="../CSS/estilos.css">
		<link rel="stylesheet" href="../CSS/normalize.css">
</head>
<!--Las clases se pueden cambiar, pero se tiene que tener en cuenta que el estilo que coloque de ejemplo trabaja con ellas-->
<!--recomiendo hacer un CSS nuevo para estas paginas, en donde te compies de cierta partes que sean necesarias de estilo.css-->
<body>
	<header class="header">
			<nav class="nav">
					<div class="nav__div div__log">
							<a href="../index_usuario.php"> <h2>KANBAN<em class="log__proyect">proyect</em></h2></a>
					</div>
					<div class="nav__div">
							<ul class="nav__div-ul ">
									<li class="nav__item "><a class="div__conten-item" href="../index_usuario.php">Inicio</a> </li>

									<li class="nav__item "><a class="div__conten-item" href="registro_proyecto.php">Crear un proyecto</a> </li>

									<li class="nav__item "><a class="div__conten-item" href="login_proyecto.php">Ingresar a un proyecto</a> </li>

							</ul>
					</div>
					<div class="nav__div div_conten-button">
							<div class="div_button"><a class="div_button-link"> <?php if(isset($_SESSION['usuario'])){echo
		$_SESSION['usuario']
	;} ?> </a></div>
			<div class="div_button div_button-color"><a class="div_button-link " href="../registro/cerrar_sesion.php">Cerrar Sesión</a></div>
					</div>
			</nav>
	</header>
<!--si es posible coloca un div o button con forma circular que se encuentre arriba y a la izquiera de la pagina que tenga como enlace la pagina principal-->
        <main>
            <!--div que forma parte del diseño de la pagina registro.php, no es necesaria y se puede eliminar o modificar-->
            <div class="contenedor__todo">

                <!--Formulario de Login y registro, es necesario y no se debe ni elminar, ni modificar-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login_proyecto_be.php" method="POST" class="formulario__login">
                        <h2>Ingresar a un proyecto</h2>
                        <input type="text" placeholder="Codigo del proyecto" name="cod_proyecto">
                        <button class="button">Entrar</button>
                    </form>

                </div>
            </div>

        </main>
</body>
</html>
