<?php

function captura_de_valores_del_formulario(){
	//Verificar campos obligatorios y validos
	if(!isset($_POST['txtnombre']) || empty($_POST['txtnombre'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo nombre esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
	if(!isset($_POST['txtemail']) || empty($_POST['txtemail'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo email esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
	if(!isset($_POST['txtcelular']) || empty($_POST['txtcelular'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo celular esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
	if(!isset($_POST['txtcarrera']) || empty($_POST['txtcarrera'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo carrera esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
	if(!isset($_POST['txtsemestre']) || empty($_POST['txtsemestre'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo semestre esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
	if(!isset($_POST['txtuniversidad']) || empty($_POST['txtuniversidad'])):
		wp_redirect(add_query_arg(array('errormsg' => 'El campo universidad esta incompleto'), get_home_url() . "/registro")); exit;
	endif;
		//Redirigir usuario y mostrar mensaje de error

	//Sanitizar los valores utilizando funciones de Wordpress
	$nombre = sanitize_text_field( $_POST['txtnombre']);
	$alias = sanitize_text_field( $_POST['txtalias']);
	$email = sanitize_text_field( $_POST['txtemail']);
	$celular = sanitize_text_field( $_POST['txtcelular']);
	$carrera = sanitize_text_field( $_POST['txtcarrera']);
	$semestre = sanitize_text_field( $_POST['txtsemestre']);
	$universidad = sanitize_text_field( $_POST['txtuniversidad']);
	$acercade = sanitize_text_field( $_POST['txtacercade']);
	$porque = sanitize_text_field( $_POST['txtporque']);
	$reto = sanitize_text_field( $_POST['txtreto']);
	$cualidades = sanitize_text_field( $_POST['txtcualidades']);

	//Manejo de informacion

	global $wpdb;
	$data_array = array(
						'nombre_completo' => $_POST['txtnombre'],
						'alias' => $_POST['txtalias'],
						'email' => $_POST['txtemail'],
						'celular' => $_POST['txtcelular'],
						'carrera' => $_POST['txtcarrera'],
						'semestre' => $_POST['txtsemestre'],
						'universidad' => $_POST['txtuniversidad'],
						'mas' => $_POST['txtacercade'],
						'ideosfera' => $_POST['txtporque'],
						'reto' => $_POST['txtreto'],
						'cualidades' => $_POST['txtcualidades']
						);

	$table_name = 'form_entry';

	$rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);

	//Enviar E-mail

	/*$destinatario = 'ivan.mejiacalderon@here.com';
	$asunto = $mensaje;
	$cuerpo= 'El cuerpo del mensaje con todo el HTML que queramos. Por ejemplo: <a href="https://www.loopeando.com">Loopeando.com</a>';
 	
	wp_mail( $destinatario, $asunto , $cuerpo);*/

	//user posted variables
  $name = $_POST['txtnombre'];
  $email = $_POST['txtemail'];
  $message = $_POST['txtporque'];

//php mailer variables
  $to = get_option('ingivanmeji@gmail.com');
  $subject = "Some text in subject...";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";


//Here put your Validation and send mail
	$sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) {

      }//message sent!
      else  {

      }//message wasn't sent
	//wp_mail(to:"ingivanmeji@gmail.com", subject:"Formulario", message:"El usuario".$nombre."envio =>". $mensaje);
	// Redirigir con mensaje de exito


	wp_redirect(add_query_arg(array('exito' => 'Exito'), get_home_url() . "/registro")); exit;

}

add_action('admin_post_nopriv_contactform', 'captura_de_valores_del_formulario');
add_action('admin_post_contactform', 'captura_de_valores_del_formulario');
