<?php
if (isset($_POST['email'])) {
    // Email info
    $admin_email = "name@edgeledger.net";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']
    $message = $_POST['message'];

    // send email
    mail($admin_email, 'New Form Submission', $message . ' - ' . $phone, "From:" . $email);

    header('Location: http://edgeledger.net/success.html');
}