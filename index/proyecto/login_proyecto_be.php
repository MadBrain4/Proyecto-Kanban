<?php
	include('../conexion/conexion_be.php');

  session_start();
    //se declaran las variables con los varoles del formulario
	$codigo = $_POST['cod_proyecto'];
  $correo = $_SESSION['correo'];

  $conseguir_nombre_proyecto = mysqli_query($conexion, "SELECT nombre_proyecto FROM proyectos WHERE cod_proyecto = '$codigo'");
  if (mysqli_num_rows($conseguir_nombre_proyecto) > 0) {
    $consulta = "SELECT * FROM proyectos WHERE cod_proyecto = '$codigo'";
    $resultados = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_array($resultados,MYSQLI_ASSOC);
    $_SESSION['nombre_proy'] = $fila['nombre_proyecto'];
  }

  //se verifica si el codigo ingresado tiene un proyecto asociado
  $validar_cod = mysqli_query($conexion, "SELECT * FROM enlace_proyectos WHERE cod_proyecto = '$codigo'");
  //en caso de que si tenga un proyecto asociado
  if (mysqli_num_rows($validar_cod) > 0) {
  	//se verifica si ya el usuario es miembro de ese proyecto
    $validar_getinto = mysqli_query($conexion, "SELECT * FROM enlace_proyectos WHERE cod_proyecto = '$codigo' and correo_usuario = '$correo'");
    //se guarda el codigo en SECCION
    $_SESSION['codigo'] = $codigo;
    //En caso de que si es miembro solo sera redirigido
    if(mysqli_num_rows($validar_getinto)>0){
      echo '
        <script>
      		alert("sera redirijido al proyecto");
        </script>
        ';
        header("location: proyecto.php ");
        exit();
    	//en caso de que aun no es miembro se guardara su correo y se le asignara un rol por defecto "mienbro"
    }else{
    	$rol = 4;
      $query = "INSERT INTO enlace_proyectos(correo_usuario, cod_proyecto, rol_usuario) VALUES('$correo', '$codigo', '$rol')";
      $ejecutar = mysqli_query($conexion, $query);
      //se verifica si la query se ejecuto correctamente
      if($ejecutar){
  			echo"
        <script>
        	alert('su usuario se registro de manera exitosa como miembro del proyecto');
          window.location = 'proyecto.php';
        </script>
        ";
        exit();
      }else{
      	echo"
          <script>
            alert('Hubo un error al registrarlo como miembro del proyecto con el codigo: $codigo');
            window.location = 'login_proyecto.php';
        	</script>
      	";
        exit();
    	}
    }
    //En caso de que no
    }else{
        echo"
            <script>
                alert('El codigo ($codigo) no se encuentra asociado a ningun proyecto, intente de nuevo');
                window.location = 'login_proyecto.php';
            </script>
        ";
        exit();
    }
	mysqli_close($conexion);

?>
