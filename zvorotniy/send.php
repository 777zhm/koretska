<?php
        $your_name = $_POST['username'];
        $your_phone = $_POST['usertelephone'];
        $your_email = $_POST['useremail'];
        $admin_email = 'vladimir.mvp7@gmail.com';
        $header .= 'From: ' .$your_name.' <'.$your_email.'>';
        $subject = 'Нове замовлення з сайту koretska-legal.com';
        $message = '
    Нове замовлення з сайту koretska-legal.com';
        $message.='
    Ім я: ' . $your_name.'
    Телефон: ' . $your_phone.'
    E-mail: ' . $your_email;
mail($admin_email, $subject, $message, $header);
$data = array('data' => array( 'message' => $message ) );

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'success.html';
header("Location: http://$host$uri/$extra");
exit;
?>