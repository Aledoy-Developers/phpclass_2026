<?php

 //connect to the database
        $conn = mysqli_connect('localhost','jobseeker','olumide','jobseeker');
        if(!$conn)
            {
                echo 'Cannot connect to db';
                exit;
            }

            
?>