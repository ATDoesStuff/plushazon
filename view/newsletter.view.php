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
        <a href="#">Newsletter</a>
        <a href="https://github.com/ATDoesStuff">Github</a>
        <a href="#placeholder">Twitter</a>
        <a href="">Instagram</a>
    </div>
    <main>
        <div class="divFormInsert">
            <form action="#" method="POST">
                <label for="nombre">NOMBRE(S): </label>
                <input type="text" name="nombre"><br>

                <label for="apellido">APELLIDOS: </label>
                <input type="text" name="apellido"><br>

                <label for="correo">CORREO: </label>
                <input type="text" name="correo"><br>

                <label for="correo2">CONFIRMAR CORREO:</label>
                <input type="text" name="correo2"><br>
                
                <label for="noticias">RECIBIR NOTICIAS?</label>
                <input type="checkbox" name="noticias"><br>

                <input type="submit" name="upload" value="SUBSCRIBIRSE" class="submitBtn">
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright © 2021 Team7. All rights reserved</p>
    </footer>
</body>
</html>