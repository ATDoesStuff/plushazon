<?php
    session_start();
 
    $id = $_SESSION['id'];

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dataBase = "desaw";

        $con = new mysqli($host, $user, $pass, $dataBase);

        $usernameNew = $_SESSION['username'];
        $passNew = $_SESSION['password'];

        $sql = "UPDATE users SET username=$usernameNew, password=$passNew WHERE id=$id";

        $query = mysqli_query($con, $sql);

    };

    require("view/account.view.php");
?>