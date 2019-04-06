<?php 

    $to = "vadimoleynik21@gmail.com"; // this is your Email address
    $from = "email"; // this is the sender's Email address
    $name = $_POST['fio'];
    $email = $_POST['email'];
    $subject = "Нове замовлення";
    $message = "Ім'я:". $name . "\n\n".
    "E-mail:". $email;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if ($name != "" && $email != "") {
        mail($to,$subject,$message,$headers);
        echo "Дякуємо за лист, ми скоро зв'яжемося з Вами";
    }
    
    ?>