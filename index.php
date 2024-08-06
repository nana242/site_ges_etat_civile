<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css1/login.css">
    <title>ETAT CIVIL</title>
</head>
<body>
<?php include 'background_image.php';?>
    <div class="container">
        <div class="title">
            <p>Connection</p>
        </div>
        <form action="" method="post" name="login">
            <div class="user_details">
                <div class="input_box">
                    <label for="code">Nom utilisateur</label>
                    <input type="text" id="code"
                    placeholder="Entrer votre nom" name="userid" 
                    required>
                </div>
                <div class="input_box">
                    <label for="code">Mot de passe</label>
                    <input type="password" id="nom"  name="password"  
                    placeholder="Entrer votre mot de passe"
                    required>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $password = md5($_POST["password"]);
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if(count($count) > 1) {
            $_SESSION['login_user']=$username;
            header("Location: tableau_de_bord.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>
