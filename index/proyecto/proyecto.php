<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos con Kanban</title>
    <link rel="stylesheet" href="../CSS/estilos_proyecto.css">
  </head>
  <body>
    <header class="header_estilos arriba">
        <nav class="nav_estilos">
            <div class="nav__div_estilos div__log_estilos">
                <a href="../index_usuario.php"> <h2>KANBAN<em class="log__proyect_estilos">proyect</em></h2></a>
            </div>
            <div class="nav__div_estilos">
                <ul class="nav__div-ul_estilos">
                    <li class="nav__item_estilos"><a class="div__conten-item_estilos" href="../index_usuario.php">Inicio</a> </li>

                    <li class="nav__item_estilos"><a class="div__conten-item_estilos" href="registro_proyecto.php">Crear un proyecto</a> </li>

                    <li class="nav__item_estilos"><a class="div__conten-item_estilos" href="login_proyecto.php">Ingresar a un proyecto</a> </li>

                </ul>
            </div>
            <div class="nav__div_estilos div_conten-button_estilos">
                <div class="div_button_estilos"><a class="div_button-link_estilos"> <?php session_start(); if(isset($_SESSION['usuario'])){echo$_SESSION['usuario'];} ?> </a></div>
                <div class="div_button_estilos div_button-color_estilos"><a class="div_button-link_estilos" href="../registro/cerrar_sesion.php">Cerrar Sesión</a></div>
            </div>
        </nav>
    </header>

    <nav class="espacio-titulo">
      <div class="container_titulo">
        <h2 class="titulo"><a href="proyecto.php"><span style="--l;"> <?php if(isset($_SESSION['usuario'])){echo $_SESSION['nombre_proy'];} ?></span></a></h2>
      <div>
    </nav>

    <div class= container_principal>
      <div class="container_secundario">
        <form id="formTask">
          <div>
            <input type="text" id="title" placeholder="Agregue una nota" class="notas"/>
          </div>
          <div class="descripcion">
            <textarea id="description" class="area" placeholder="Dame una descripción"></textarea>
          </div>
          <button type="submit" class="enviar">Guardar</button>
        </form>
      </div>

      <div class="container_proyecto">
        <div class="columna no-iniciada">
          <h3 class="">No Iniciada</h3>
          <input type="text" value="" name = "proceso" autocomplete="off" class="ingresar" placeholder="Ingrese tarea"/>
          <button type="submit" name="save-completed" class="boton-columna">Guardar</button>
        </div>

        <div class="columna proceso">
          <h3 class="">En Proceso</h3>
          <input type="text" value="" name = "proceso" autocomplete="off" class="ingresar" placeholder="Ingrese tarea"/>
          <button type="submit" name="save-completed" class="boton-columna">Guardar</button>
        </div>

        <div class="columna terminada">
          <h3 class="">Terminada</h3>
          <input type="text" value="" name = "proceso" autocomplete="off" class="ingresar" placeholder="Ingrese tarea"/>
          <button type="submit" name="save-completed" class="boton-columna">Guardar</button>
        </div>

        <div class="columna cancelada">
          <h3 class="">Cancelada</h3>
          <input type="text" value="" name = "proceso" autocomplete="off" class="ingresar" placeholder="Ingrese tarea"/>
          <button type="submit" name="save-completed" class="boton-columna">Guardar</button>
        </div>
      </div>
    </div>

  </body>
</html>
