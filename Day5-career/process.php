<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$num_check = strlen($phone);
$pass_check = strlen($password);
$fullname = $firstname.' '.$lastname;



if(!$firstname || !$firstname ||  !$email || !$phone || !$username || !$password || !$confirm_password || !$qualification || !$gender)
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


       include('connect.php');
        
        $query = "insert into vacancy set firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', qualification = '$qualification', gender = '$gender', username = '$username', password = '$password' ";

        $result = mysqli_query($conn,$query);

if($result)
    {
        $success = 'Application Successful. ';
        include('thankyou.php');
        exit;
    }
    else{
        echo 'Somthiong went wrong';
        exit;
    }

?>