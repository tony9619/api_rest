<?php
	require_once('db.php');

	
	$conexion = new mysqli('localhost','root','root','eshare','3306');
	
	
	// funcion todos los usuarios

	function all_usuarios(){
		$Query = 'SELECT * FROM tb_usuarios';
		$respuesta = ObtenerRegistros($Query);	
		return ConvertirUTF8($respuesta);
	}
	
	// funcion buscar usuario
	function find_usuarios_id($id_usuario){
		$Query = "SELECT * FROM tb_usuarios where id_usuario=$id_usuario";
		$respuesta = array();
		$respuesta= ObtenerRegistros($Query);	
		return ConvertirUTF8($respuesta);
	}
	
	// funcion crear usuario
	function crear_usuario($array){	
		$usuario = $array['usuario'];
		$nombre = $array['nombre'];
		$apellido = $array['apellido']; 
		$clave = $array['clave'];
		$fecha_gra = $array['fecha_gra'];
		$ultimo_usuario = $array['ultimo_usuario'];

		$conexion = new mysqli('127.0.0.1','root','root','eshare','3306');

		$Query ="select validar_usuario_new('$usuario','$nombre','$apellido','$clave') as retorno from dual;";
	
		$var ;
		$var_resultado = $conexion->query($Query);
		if($var_resultado->num_rows>0)
  		{
			  while ($var_fila=$var_resultado->fetch_array()){
					$var = $var_fila["retorno"];
			  }
		  }
		  return $var;
	}
	
	// funcion eliminar usuario
	function eliminar_usuario($array){
		$id_usuario = $array['id_usuario'];
		$Query = "DELETE FROM tb_usuarios where id_usuario=$id_usuario";
		NonQuery($Query);
		return true;
	}
	
	// funcion editar usuario
	function editar_usuario($array){
		$id_usuario = $array['id_usuario'];
		$nombre = $array['nombre'];
		$apellido = $array['apellido']; 
		$clave = $array['clave'];
		$Query = "
		UPDATE  tb_usuarios SET nombre = '$nombre', apellido='$apellido', clave='$clave'
		WHERE id_usuario = $id_usuario
		";
		NonQuery($Query);
		return true;
	}
?>