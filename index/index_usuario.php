<?php
	//Si no tienes sesion te reenvia a la pagina principal
	
	session_start();
	if(!isset($_SESSION['usuario'])){
		echo '
			<script>
				alert("Por favor, inicia sesion");
				window.location = "index.php";
			</script>
		';
		die();
		session_destroy();
	}

	if(isset($_SESSION['usuario'])){
		include('registro/login_usuario_be.php');
	}
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Kanban</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__div div__log">
                <a href=""> <h2>KANBAN<em class="log__proyect">proyect</em></h2></a>
            </div>
            <div class="nav__div">
                <ul class="nav__div-ul ">
                    <li class="nav__item "><a class="div__conten-item" href="index_usuario.php">Inicio</a> </li>
                    
                    <li class="nav__item "><a class="div__conten-item" href="#">Crear un proyecto</a> </li>
                    
                    <li class="nav__item "><a class="div__conten-item" href="#">Ingresar a un proyecto</a> </li>
                    
                </ul>
            </div>
            <div class="nav__div div_conten-button">
                <div class="div_button">Bienvenido</div>
				<div class="div_button div_button-color"><a class="div_button-link " href="registro/cerrar_sesion.php">Cerrar Sesion</a></div>
            </div>
        </nav>
    </header>

    <section>
        <div class="conteiner">
            <div class="conteiner__titulo">
                <div class="conteiner__titulo-img">
                    <div class="conteiner__titulo-text">
                        <h1>KANBAN<span>proyect</span>  </h1>
                    </div>
                </div>
            </div>
            <div class="conteiner__primary div-content">
                <div class="div-img">
                    <img src="IMG/pngwing3.png" alt="">
                </div>  
                <div class="div-tema">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla </p>
                </div>  
            </div>
            <div class="conteiner__segundary div-content">
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Voluptate nulla itaque doloribus tempora sint 
                     eveniet adipisci veritatis nihil iste 
                      quisquam in nemo, doloremque cum aspernatur quod.
                       Neque, laboriosam veritatis!</p>
            </div>
            <div class="conteiner__primary div-content">
                
                <div class="div-tema">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipiscfasfi veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!Lorem ipsum dolor sit amet consectetur adipisicing 
                        elit. Voluptate nulla itaque doloribus tempora sint 
                        eveniet adipisci veritatis nihil iste perferendis 
                        quisquam in nemo, doloremque cum aspernatur quod. 
                        Neque, laboriosam veritatis!</p>
                </div>

                <div class="div-img">
                    <img src="IMG/team.png" alt="">
                </div>  

            </div>
            
        </div>
        <div class="conteiner2">

        </div>
    </section>

    <footer>
        <div>
            <div>
                <p>Derechos de autor aqui</p>
            </div>
        </div>
    </footer>
</body>
</html>
