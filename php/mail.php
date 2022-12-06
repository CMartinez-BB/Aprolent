<?php 
    // $para= 'nobody@example.com';
    // $titulo= 'El título';
    // $mensaje= 'Hola';
    // $cabeceras= 'From: webmaster@example.com' . "\r\n" .
    //     'Reply-To: webmaster@example.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();
    
    
    if (isset($_POST['enviar'])) {
        # code...
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
            # code...
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $para= 'deverocode@gmail.com';
            $cabeceras= 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            $mail = mail($email, $asunto, $mensaje, $cabeceras);

            if ($mail) {
                # code...
                echo "<h4>¡Mail enviado exitosamente!</h4>";
            }
        }
    }
?>
