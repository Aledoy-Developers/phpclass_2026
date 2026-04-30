<?php
 
include('connect.php');

echo '<h2>Job applicants</h2>';
echo '<hr>';


$query = "select * from vacancy order by firstname asc"; //write your query
$result = mysqli_query($conn,$query); //runs the query
$num = mysqli_num_rows($result); //count number of records in the results

echo '<h3>No of records found: '.$num.'</h3>';

for($i=0; $i<$num; $i++)
    {
        $row = mysqli_fetch_array($result);
        echo 'Firstname: '.$row['firstname'];
        echo '<br>';
        echo 'Lastname: '.$row['lastname'];
        echo '<br>';
        echo 'Email: '.$row['email'];
        echo '<br>';
        echo 'Phone: '.$row['phone'];
        echo '<br>';
        echo 'Qualification: '.$row['qualification'];
        echo '<br>';
        echo 'Username: '.$row['username'];
        echo '<br>';
        echo 'Status: '.$row['status'];
        echo '<hr>';
    }

?>
