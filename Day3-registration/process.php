<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$num_check = strlen($phone);
$pass_check = strlen($password);
$fullname = $firstname.' '.$lastname;



if(!$firstname || !$firstname ||  !$email || !$phone || !$username || !$password || !$confirm_password)
    {
        $error = 'All information are required';
        include('index.php');
        exit;
    }

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = 'Enter a valid email address';
        include('index.php');
        exit;
}

if($num_check != 11)
    {
        $error = 'Enter a valid GSM number';
        include('index.php');
        exit;
    }
if($pass_check < 6)
    {
        $error = 'Your password should be more than 6 letters';
        include('index.php');
        exit;
    }

    if($password != $confirm_password)
        {
            $error = 'Your password and confirm password does not match';
            include('index.php');
            exit;
        }


    $to = 'luabikoye@yahoo.com';
    $mail_sub = 'Feedback from Website';
    $from = "From: noreply@aledoyportolio.top";

    $body = 'Below is the information that was filled'."\n"
    .'Name: '.$fullname."\n"
    .'Email: '.$email."\n"
    .'Phone: '.$phone."\n"
    .'Username: '.$username."\n"
    .'Password: '.$password."\n"
    ."***************************\n\n";

    //this sends the email to the mail box
    mail($to,$mail_sub,$body,$from);


    //save details in a text file
    $file = fopen('data.txt','a');
    fwrite($file,$body);
    fclose($file);
    


        $success = 'Message Sent. Someone will contact you shortly';
        include('thankyou.php');
        exit;

?>