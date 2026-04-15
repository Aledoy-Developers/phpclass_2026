<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }


    .error{
        background-color: red;
        color: white;
        padding:10px;
    }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <form action="process.php" method="POST">

    <?php if($error) {

    echo '<div class="error">'.$error.'</div>';
    }
    ?>

        <input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>">

        <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>">

        <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">

        <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>">

        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">

        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">

        <input type="password" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">

        <button type="submit">Register</button>

    </form>
</div>

</body>
</html>