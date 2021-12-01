<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Chris Vega 🐊">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dropdownNav.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&family=Nunito&display=swap" rel="stylesheet">  
    
    <link rel="icon" href="favicon.ico">
    
    <script src="script/dropdownNav.js"></script>
    <script src="script/confirms.js"></script>

    <title>Plushazon</title>
</head>
<body>
    <header>
        <div style="margin-top: 1rem;">
        <div class="divRightFloat">
            <div class="dropdown">
                <button class="dropbtn btnSettings" onclick="dDownNav()">
                    ▼
                </button>
                <div id="dropDownContent" class="dropdown-content">
                    <a href="account.php">Account Settings</a>
                    <a href="logout.php" onclick="return confirmLogout()">Log Out</a>
                </div>
            </div>
            <p class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
            <a href="account.php">
                <img id="profilePic" src="image/profiles/<?php if($_SESSION["file_name"] == NULL || $_SESSION["file_name"] == "" || !$_SESSION["file_name"]){ echo'default.png'; }else{ echo$_SESSION["file_name"]; } ?>" class="profilePic">
            </a>
        </div>
        </div>
        <a href="main.php">
            <h1 class="title">PLUSHAZON</h1>
        </a>
    </header>
    <div class="sidenav">
        <a href="insert.php">Subir Peluche</a>
        <a href="newsletter.php">Newsletter</a>
        <a href="https://github.com/ATDoesStuff">Github</a>
        <a href="#placeholder">Twitter</a>
        <a href="">Instagram</a>
    </div>
    <main>
        <?php
        require "config.php";
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $result = $link->query($sql);
        if ($result -> num_rows > 0){

            while($row = $result -> fetch_assoc()){
            echo "<section class='product'>";

                if ($row["edited"] == 1){
                    echo "<p>Posteado en: " . $row["posted_at"] . " (Edited*)</p>";
                } else if ($row["edited"] == 0){
                    echo "<p>Posteado en: " . $row["posted_at"] . "</p>";
                };

            echo "<p style='text-align: left;'>Propetario: " . $row["posted_by"] .  "</p>";

            echo "<div class= 'imgProductDiv' >";
            echo "<img src= 'image/products/" . $row["file_name"] . "' alt='productPlaceholderImage' class='imgProduct'>";
            echo "</div>";

            echo "<div class='divUserPost'></div>";

            echo "<p>" . $row["name"] . " - $" . $row["price"] . "</p>";
            echo "<p>" . $row["description"] . "</p>";
            
            echo "</section>";
            };

        } else {
            // Default message in case theres no posts on feed 🐊 
            echo "<section class='product'>";
            echo "<img src= 'https://via.placeholder.com/200' alt='PLACEHOLDER PRODUCT IMG' class='imgPost'>";
            echo "<p style='text-align: left;'> PLACEHOLDER - $400</p>";
            echo "<div class='divUserPost'></div>";
            echo "<p> Heyaaa, looks like there ain't any posts here yet... Why don't ya' post something nice?</p>";
            echo "</section>";
        }

        echo "<script> console.log('". $_SESSION["file_name"] ."') </script>";

        ?>
    </main>
    <footer>
        <p>Copyright © 2021 Team7. All rights reserved</p>
    </footer>
</body>
</html>