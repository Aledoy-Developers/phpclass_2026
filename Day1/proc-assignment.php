<?php
$username = $_POST['username'];
$password = $_POST['password'];
if (($username == "lu" && $password == "Aledoy") || ($username == "bayo" && $password == "Kelechi")) {
    echo '<h3>Welcome, ' .($username) . '! Login successful.</h3>';
} 
else {
    echo '<h3>Invalid username or password. Please try again.</h3>';
}

?>