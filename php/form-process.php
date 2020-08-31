<?php
ini_set('sendmail_from', "no-responder@aricaguau.cl");

//Check whether the form has been submitted
if (isset($_POST["name"], $_POST["email"], $_POST["msg_subject"], $_POST["message"])) {

    $para = "pedidos@aricaguau.cl";
    $titulo = $_POST['msg_subject'];
    $mensaje = $_POST['message'];
    $cabeceras = "From: " . $_POST['email'] . "\r\n" .
            'Reply-To: '. $_POST["email"] . "\r\n" .
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