<?php

$name 		= (string)$_POST['nombre'];
$lastname 	= (string)$_POST['apellido'];
$email 		= (string)$_POST['email'];
$message 	= (string)$_POST['mensaje'];
$phone 		= (int)$_POST['telefono'];

if((!empty($name)) && (!empty($lastname)) && (!empty($email)) && (!empty($message)) && (!empty($phone))){
	if((gettype($name) == 'string') && (gettype($lastname) == 'string') && (gettype($message) == 'string')){
		if((filter_var($email, FILTER_VALIDATE_EMAIL)) && (gettype($phone) == 'integer') && (strlen($phone) == 10)){

			$to = "jando_16@hotmail.com";
			$message .= "\n\nNombre: ".$name." ".$lastname."\nTelefono: ".$phone;
			$headers = 'From: '.$email.' ('.$name.')';
			$subject = "Solicitud de Información";
			
			mail($to, $subject, $message, $headers);

			echo "<p style='background-color: #99CC33; color: white; text-align:center; font-size: 1em; padding: 5px;'>Mensaje enviado correctamente.</p>";

			?>
						
			<script>

				$(function(){
					$("#form-contact")[0].reset();
				});

			</script>

			<?php

		} else {
			//echo "Error en el tercer IF";
			echo "<p style='background-color: #ff3c21; color: white; text-align:center; font-size: 1em; padding: 5px;'>Complete todos los campos requeridos.</p>";
		}

	} else {
		//echo "Error en el segundo IF";
		echo "<p style='background-color: #ff3c21; color: white; text-align:center; font-size: 1em; padding: 5px;'>Complete todos los campos requeridos.</p>";
	}
} else {
	//echo "Error en el primer IF";
	echo "<p style='background-color: #ff3c21; color: white; text-align:center; font-size: 1em; padding: 5px;'>Complete todos los campos requeridos.</p>";
}

?>