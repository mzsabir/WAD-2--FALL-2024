<?php
$con=mysqli_connect("localhost","root","","cadmin");
if(!$con)
    die("Sorry! can't create connection");
$result=mysqli_query($con,"SELECT * from users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>wellcome to php</p>
    <?php 
        $num1=5;
        $num2=6;
        $z=$num1+$num2;
        for($i=1;$i<=10;$i++)
            echo "<p>hi wellcome to PHP ".$z."</p>";
        ?>
        <h2>Record from Database</h2>
        <p>
            <?php
            
            while($row=mysqli_fetch_assoc($result)) 
               
            {
                echo $row['name']."<br>"; 
                /*echo "<pre>";
                print_r($row);
                echo "</pre>";*/
            }
                
            ?>
        </p>
</body>
</html>