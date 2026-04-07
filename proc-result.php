<?php
$maths = $_POST['maths'];
$eng = $_POST['eng'];
$eco = $_POST['eco'];
$comm = $_POST['comm'];

if($maths > 100)
    {
        echo '<div style="color:red;">Your maths score is above 100</div>';
        exit;
    }
    if($eng > 100)
    {
        echo '<div style="color:red;">Your english score is above 100</div>';
        exit;
    }

    if($eco > 100)
    {
        echo '<div style="color:red;">Your economics score is above 100</div>';
        exit;
    }

    if($comm > 100)
    {
        echo '<div style="color:red;">Your Commerce score is above 100</div>';
        exit;
    }


$ans = $maths+$eng+$eco+$comm;

echo '<h3>You total score is: '.$ans.' / 400</h3>';
echo '<hr>';
$cgp = $ans/400*100;
echo '<h3>You CGPA: '.$cgp.'%</h3>';

echo '<hr>';

echo '<h2>Recommendation</h2>';

if($cgp >= 80)
    {
        echo '<div style="color:green;">Please go ahead to choose between <ul>
        <li>University of Lagos</li>
        <li>Lagos State University</li>
        <li>Yaba College of Technology</li>
        <li>Lagos State Polytechnic</li>
        </ul>
        </div>';
    }
    elseif($cgp <= 79 && $cgp >= 60)
    {
        echo '<div style="color:green;">Please go ahead to choose between <ul>
        <li>Lagos State University</li>
        <li>Yaba College of Technology</li>
        <li>Lagos State Polytechnic</li>
        </ul>
        </div>';
    }

    elseif($cgp <= 59  && $cgp >= 45)
    {
        echo '<div style="color:green;">Please go ahead to choose between <ul>
        <li>Yaba College of Technology</li>
        <li>Lagos State Polytechnic</li>
        </ul>
        </div>';
    }
    else
        {

        echo '<div style="color:red;">Sorry! Retry JAMB next year</div>';
        }

?>