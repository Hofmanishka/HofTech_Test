<?php
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);

    $fio = urldecode($fio);
    $email = urldecode($email);

    $fio = trim($fio);
    $email = trim($email);

    echo $fio;
    echo "<br>";
    echo $email;

    if (mail("kvadratvkube@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: denrey619@gmail.com \r\n"))
     {     echo "<br>сообщение успешно отправлено</br>"; 
    } else { 
    echo "<br>при отправке сообщения возникли ошибки</br>";
}
?>