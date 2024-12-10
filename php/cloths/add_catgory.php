<?php 
$conn=mysqli_connect("localhost","root","","clothes");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ok.css">
</head>
<body>
    <?php include("includes/header.php"); ?>
    <h1>Add New Catrogy</h1>

    <form action="index.php" method="POST">
        Name: <input type="text" name="cat_name"><br>
        Picture: <input type="file" name="cat_pic"><br>
        <textarea rows="6" name="cat_detail"></textarea><br>
        <input type="submit"> 
    </form>
    <?php include("includes/footer.php"); ?>
  
</body>
</html>