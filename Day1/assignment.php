<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment</title>
</head>

<style>

  .loginpage {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #fff;
    background-color: #156e03;


    h1{
      text-align: center;
    }
    p{
      text-align: center;
    }
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

</style>
<body>
  <div class="loginpage">
  <h1>Login page</h1>
  <p>Enter your login details here.</p>
  <form action="proc-assignment.php" method="post" class="form-control">
    <label for="username">Username</label><br>
    <input type="text" id="username" name="username" size="50" required><br><br>
    <label for="password">password</label><br>
    <input type="password" id="password" name="password" size="50" required><br><br>
    <input type="submit" value=" Login">


    <!-- <p>
      <strong>your Credentials:</strong><br>
      User 1: lu / Aledoy<br>
      User 2: bayo / Kelechi
    </p> -->

    </div>
</body>
</html>