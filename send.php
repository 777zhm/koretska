<?php 

    $to = "777zhm@gmail.com"; // this is your Email address
    $from = "email"; // this is the sender's Email address
    $name = $_POST['fio'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = "Нове замовлення";
    $message = "Ім'я:". $name . "\n\n".
    "E-mail:". $email; . "\n\n".
    "Телефон:". $telephone;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if ($name != "" || $email != "" || $telephone != "") {
        mail($to,$subject,$message,$headers);
        echo "Дякуємо за лист, ми скоро зв'яжемося з Вами";
    }
    
    ?>