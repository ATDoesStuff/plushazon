<?php
    session_start();
 
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

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/products/".$filename;

        
        $name = $_POST["namePOST"];
        $description = $_POST["descriptionPOST"];
        $price = $_POST["pricePOST"];
        $username = $_SESSION["username"];

        $sql = "INSERT INTO products(id, name, description, price, posted_by, file_name) VALUES(NULL, '$name' ,'$description', $price ,'$username' , '$filename')";
        $query = mysqli_query($con, $sql);

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
    
    };

    require("view/insert.view.php");
?>