<?php
ini_set('sendmail_from', "no-responder@aricaguau.cl");

//Check whether the form has been submitted
if (isset($_POST["name"], $_POST["email"], $_POST["msg_subject"], $_POST["message"])) {

    $para = "aricaguau.oscar@gmail.com";
//    $para = "razielvalle@gambess.com";
    $titulo = $_POST['msg_subject'];
    $mensaje = $_POST['message'];
    
    $cabeceras .= 'To: Pedidos <pedidos@aricaguau.cl>, Oscar <aricaguau.oscar@gmail.com>' . "\r\n";
    $cabeceras .= 'From: ' . $_POST["name"] . " ". $_POST['email']  . "\r\n";
    $cabeceras .= 'Bcc: pedidos@aricaguau.cl' . "\r\n";
    
    
    $cabeceras .= 'Reply-To: '. $_POST["email"] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    $success = mail($para, $titulo, $mensaje, $cabeceras);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
        echo $errorMessage;
    } else {
        echo "success";
    }
} else {
    echo "error";
}