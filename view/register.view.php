<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Chris Vega 🐊">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo&family=Nunito&display=swap" rel="stylesheet">  
    
    <link rel="icon" href="favicon.ico">
    
    <title>Plushazon</title>
</head>
<body>

    <!-- Division donde se guarda la form dentro de una caja -->
    <div class="formRight vertical-center formBox">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username: </label>
            <input type="text" name="username" class="inputRes"  placeholder="Nombre de Usuario" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span><br><br>

            <label for="password">Password: </label>
            <input type="password" name="password" class="inputRes"  placeholder="Contraseña" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span><br><br>

            <label for="confirm_password">Confirm P:</label>
            <input type="password" name="confirm_password" class="inputRes" placeholder="Repite tu contraseña" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span><br><br>

            <input type="submit" class="submitBtn" value="Submit"><br><br>
            <p class="dont">
                ¿ Ya tienes cuenta ?
                <a href="login.php">Iniciar Sesión</a>
			</p>
        </form>
    </div>

    
    
    <!-- Flavor text :) -->
    <div class="title ">
        <h1>PLUSHAZON</h1>
		<h2>La compañia numero 1 en venta y compra de peluches!</h2>
    </div>
				

			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<p class="invalid-feedback"><?php echo $username_err; ?></p>
						<p class="invalid-feedback"><?php echo $password_err; ?></p>
					</ul>
				</div>
			<?php endif; ?>

		<?php 
        if(!empty($login_err)){
            echo '<div>' . $login_err . '</div>';
        }        
        ?>

        
	</div>
</body>
</html>