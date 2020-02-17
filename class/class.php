<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class trabajo {
	public function enviarCorreo(){
        //Create instance of PHPMailer
            $mail = new PHPMailer();
        //Set mailer to use smtp
            $mail->isSMTP();
        //Define smtp host
            $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
            $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
            $mail->SMTPSecure = "tls";
        //Port to connect smtp
            $mail->Port = "587";
        //Set gmail username
            $mail->Username = "adolfomejiarodriguez@gmail.com";
        //Set gmail password
            $mail->Password = "lplinkin";
        //Set sender email
            $mail->setFrom('info@cocacola.com');
        //Enable HTML
            $mail->isHTML(true);

        // ----------------------------- DATOS DEL MENSAJE -------------------------------
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

        //Armo el cuerpo del mensaje    
        $message = "Nombre: " . $sender_name . "<br>
                    Fecha de nacimiento: " . $fecha_nac . "<br>
                    Puesto: " . $puesto . "<br>
                    Estado civil: " . $estado_civil . "<br>
                    Telefono: " . $telefono . "<br>
                    Lugar de residencia: " . $residencia . "<br>
                    Mensaje: " . $msn;

        //Indicamos cual es la dirección de destino del correo
        $mail->addAddress($from_email, $sender_name);

        //Asignamos asunto y cuerpo del mensaje
        //El cuerpo del mensaje lo ponemos en formato html, haciendo 
        //que se vea en negrita
        $mail->Subject = "Prueba de PHPMailer";
        $mail->Body = $message;

        //Definimos AltBody por si el destinatario del correo no admite email con formato html 
        $mail->AltBody = $message;

        //Decimos que el email va a ser tipo HTML
        $mail->IsHTML(true); 

        // ------------------------- DATOS DEL FICHERO ----------------------------------

        if ($_FILES['fichero']) {
                $mail->AddAttachment($_FILES['fichero']['tmp_name'], $_FILES['fichero']['name']);
        } 

        //se envia el mensaje, si no ha habido problemas 

        if ($mail->Send()) {
            echo "Envío correcto";
        }else {
            echo "Error".$mail->ErrorInfo;  // La propiedad errorinfo contiene el error
        }
    }
}
?>