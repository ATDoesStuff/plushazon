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
    <main class="mainGridAccount">
        <div class="divFormInsert">
            <h3>INFORMACION DEL USUARIO:</h3>
            <h4>ID Del usuario: <?php echo $id ?></h4>
            <h4>Nombre de usuario actual: <?php echo $_SESSION["username"]?></h4><br>

            <h3>CAMBIAR DATOS DE CUENTA:</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                <label for="userNew">Reestablecer Nombre de Usuario: </label>
                <input type="text" name="userNew"><br>

                <label for="passNew">Reestablecer Contraseña: </label>
                <input type="text" name="passNew"><br>

                <label for="pfpNew">Actualizar Foto: </label>
                <input type="file" name="pfpNew"><br>

                <input type="submit" name="upload" value="UPDATE" class="submitBtn">
            </form>
        </div>
        <div class="divFormInsert">
            <h3>CONTACTANOS SI TIENES PROBLEMAS CON NUESTRA PAGINA:</h3>
            <h4>Numero de servicio al cliente: (866) 216-1075 </h4>
            <h4>Nuestro Twitter de ayuda: @plushazonHelp</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.189102164011!2d-122.34166298436894!3d47.62245527918573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015378b86c63b%3A0x8f3d8f8cd399f6b8!2sAmazon!5e0!3m2!1ses!2smx!4v1638391782846!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
    <footer>
        <p>Copyright © 2021 Team7. All rights reserved</p>
    </footer>
</body>
</html>