<?php

$sender_name    = $_POST["nombre"];
		$fecha_nac = $_POST["fecha_nac"];
		$puesto = $_POST["puesto"];
		$estado_civil = $_POST["estado_civil"];
		$telefono = $_POST["telefono"];
		$puesto = $_POST["puesto"];
		$from_email     = $_POST["email"];
		$reply_to_email = $_POST["email"];
		$residencia = $_POST["residencia"];
		$msn = $_POST["msn"];
		$adjunto = $_FILES["my_file"];
		
		require_once("phpmailer.php");
	        $mail->Host = "localhost";
		$mail->From = "web@localhost";
		$mail->FromName = "Servidor web";
		$mail->Subject = "Socio nuevo";
		$mail->AddAddress("ameji2@monsanto.com", "Adolfo Mejia");
		$body = "Nuevo sociorn";
		$body .= "Nombre: $sender_name";
		$mail->Body = $body;
		//adjuntamos un archivo
		$mail->AddAttachment($adjunto["tmp_name"], $adjunto["name"]);
		$mail->Send();

?>

<div class="modal">
    <div class="container-contact">
        <div class="wrap-contact">
            <div class="head">
                <img class="close" src="img/cerrar.png" alt="">
            </div>

            <div class="contact-form-title">
                <h1>Contactanos</h1>
                <h2>Envianos tus datos y tus comentarios</h2>
                <h2>*Datos requeridos</h2>
            </div>

            <form id="form-contacto" action="" method="post" class="contact-form" enctype="multipart/form-data">

                <div class="wrap-input">
                    <span>*Nombre:</span>
                    <input class="required" type="text" id="nombre" name="nombre" placeholder="Ingresar nombre completo">
                </div>

                <div class="wrap-input">
                    <span>*Fecha de Nacimiento:</span>
                    <input class="required" type="text" id="fecha_nac" name="fecha_nac" placeholder="Ingresa fecha de nacimiento">
                </div>

                <div class="wrap-input">
                    <span>Puesto a postularte:</span>
                    <input type="text" id="puesto" name="puesto" placeholder="Ingresa el puesto a ocupar">
                </div>

                <div class="wrap-input">
                    <span>Estado Civil:</span>
                    <input type="text" id="estado_civil" name="estado_civil" placeholder="Ingresa tu estado civil">
                </div>

                <div class="wrap-input">
                    <span>Teléfono:</span>
                    <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu telefono">
                </div>

                <div class="wrap-input">
                    <span>*Correo Electronico:</span>
                    <input class="required" id="email" type="email" name="email" placeholder="Ingresa tu correo electronico">
                </div>

                <div class="wrap-input">
                    <span>Lugar de Residencia:</span>
                    <input type="text" id="residencia" name="residencia" placeholder="Ingresa tu lugar de residencia">
                </div>

                <div class="wrap-input">
                    <span>Mensaje:</span>
                    <textarea id="msn" name="msn" placeholder="Escribenos tus comentarios..."></textarea>
                </div>

                <div class="wrap-file">
                    <span>Adjuntar CV:</span>
                    <input class="file" type="file" id="my_file" name="my_file">
                </div>

                <div class="wrap-btn">
                    <input type="hidden" name="enviar" value="si">

                    <input type="submit" id="enviar" value="Enviar">
                    <input type="button" id="cancelar" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
</div>