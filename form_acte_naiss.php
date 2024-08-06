<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css1/form_acte_naiss1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ETAT CIVIL</title>
</head>
<body>
<?php include 'background_image.php';?>
  <!--header debut-->
<?php include 'navbar.php';?>
<!--header fin-->
    <div class="contenair">
        <div class="title">
            <p>Acte de naissance</p>
        </div>
        <form action="acte_naiss.php" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="code">Code de registre naissance</label>
                    <input type="text" id="code"
                    placeholder="Entrer code de registre naissance" name="id_municipalite" value="<?php echo @$id_municipalite ?>"
                    >
                </div>
                
               
                <?php
                include('init.php');
                $municipalite_result=mysqli_query($conn,"SELECT `nom` FROM `municipalite`");
                echo '<div class="input_box">';
                echo '<select name="nom_municipalite">';
                echo '<option selected disabled>Municipalité</option>';
                while($row = mysqli_fetch_array($municipalite_result)){
                    $display=$row['nom'];
                    echo '<option value="'.$display.'">'.$display.'</option>';
                }
                echo '</select>';
                echo '</div>';
                ?>
           <div style="text-align:center; color:red; font-weight:500;"><?php echo @$erreur ?></div>

                <div style="text-align:center; color:red; font-weight:500;" ><?php echo @$error ?></div>

            </div>
            <div class="reg_btn">
                <input type="submit" value="Afficher">
            </div>
        </form>
    </div>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <?php include('footer.php');?>
</body>
</html>
