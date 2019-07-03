<?php
	
	require_once('utilidades.php');
	
	// si se envio la URL
	if(isset($_GET['url'])){
		
		$var = $_GET['url'];
		
		// Si el tipo de peticion es GET
		if ($_SERVER['REQUEST_METHOD']=='GET'){

			// variable que sirve para obtener el id de usuario entre toda la url
			$id_usuario = intval(preg_replace('/[^0-9]+/','',$var),10);
			
			switch ($var){
				// EndPonit Todos los usuario
				case 'all_users';
					$resp =all_usuarios();
					print_r (json_encode($resp)); // imprima el JSON
					http_response_code(200); 
				break;
				// EndPoint Buscar un usuario determinado
				case "find_user/$id_usuario";
					$resp =find_usuarios_id($id_usuario);
					print_r (json_encode($resp)); // imprima el JSON
					http_response_code(200);
				break;

				default;
			}
		}
		// Si el tipo de peticion es POST
		else if ($_SERVER['REQUEST_METHOD']=='POST'){
			// se obtiene el postBody
			$postBody = file_get_contents("php://input");
			// Convierte el post_body a formato JSON
			$convertir =json_decode($postBody,true);
			
			// si  no hay errores en el JSON
			if(json_last_error()==0){

				switch ($var){
					// End Point crear usuario	
					case 'new_user';
						$resp=crear_usuario($convertir);
						print_r (json_encode($resp)); // imprima el JSON
						http_response_code(200);
					break;
					// End Point Eliminar Usuario
					case "delete_user";
						eliminar_usuario($convertir);
						http_response_code(200);
					break;
					// End Point Editar Usuario
					case 'update_user';
						editar_usuario($convertir);
						http_response_code(200);
					break;
				}
			}
			// si hubieron errores en nuestro JSON
			else{
				// BAD REQUEST
				http_response_code(400);
			}
		
		}
		// si se realiza una peticion distinat a POST o GET
		else {
			// metodo no soportado
			http_response_code(405);
		}
	}
	else {
		header('Location: ../home_api_rest.php');
	}
?>