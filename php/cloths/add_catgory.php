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
    <style>
        label{width:200px; display:block;}
    </style>
</head>
<body>
    <?php include("includes/header.php"); ?>
    <section class="categories">
        <h1>Add New Catrogy</h1>
         
        <form action="index.php" method="POST" style="width:500px; margin:0 auto" enctype="multipart/form-data">
            <div style="display:flex; margin:20px">
                <label> Name: </label>
                <input type="text" name="cat_name">
            </div>
            <div style="display:flex; margin:20px">
                <label>Picture:</label> 
                <input type="file" name="cat_pic"><br>
            </div>
            <div style="display:flex; margin:20px">
                <label>Description:</label> 
                <textarea rows="6" cols="20" name="cat_detail"></textarea>
            </div>
            
            <input type="submit" value="ADD Category"> 
        </form>
    </section>
    <?php include("includes/footer.php"); ?>
  
</body>
</html>