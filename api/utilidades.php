<?php
	require_once('db.php');
	
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
		$Query = "
		INSERT INTO tb_usuarios (usuario,nombre,apellido,clave,fecha_gra,ultimo_usuario)
		VALUES ('$usuario','$nombre','$apellido','$clave','$fecha_gra','$ultimo_usuario')
		";
		NonQuery($Query);
		echo $mensaje;
		return true;
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