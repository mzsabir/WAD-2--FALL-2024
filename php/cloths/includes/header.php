<header style="border-bottom:2px solid gray">
        <img src="images/logo2.png" alt="Novelle Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                $m=mysqli_query($conn,"select id,name from categories");
                while($c=mysqli_fetch_array($m)){
                ?>
                    <!-- <li><a href="category.php?category_id=<?php echo $c['id']?>"><?php echo $c['name'];?></a></li> -->
                <?php } 
                if(!isset($_SESSION['name']))
                {?>
                    <li><a href="reg.php" class="nav-item">Register</a></li>
                    <li><a href="login.php" class="nav-item">Login</a></li>
                <?php
                }else
                    echo '<li><a href="logout.php" class="nav-item">Logout ('.$_SESSION["name"].')</a></li>';
                ?>
                <li><a href="add_catgory.php" class="nav-item">ADD NEW CATEGORY</a></li>
              
            </ul>
        </nav>
    </header>