<?php
      include('init.php');
      $code_naiss=$_GET['update_code_naiss'];
      $sql="SELECT * FROM `naissances` WHERE code_naiss=$code_naiss";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      $code_naiss=$row['code_naiss'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $sexe=$row['sexe'];
      $date_naiss=$row['date_naiss'];
      $h_naiss=$row['h_naiss'];
      $lieu_naiss=$row['lieu_naiss'];
      $nom_pere=$row['nom_pere'];
      $prenom_pere=$row['prenom_pere'];
      $natio_pere=$row['natio_pere'];
      $nom_mere=$row['nom_mere'];
      $prenom_mere=$row['prenom_mere'];
      $natio_mere=$row['natio_mere'];
      $nom_municipalite=$row['nom_municipalite'];


    if(isset($_POST['valider'])) {
        $code_n = $_POST['code_n'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        @$sexe = $_POST['sexe'];
        $date_naiss= $_POST['date_naiss'];
        $h_naiss = $_POST['h_naiss'];
        $lieu_naiss = $_POST['lieu_naiss'];
        $nom_pere = $_POST['nom_pere'];
        $prenom_pere = $_POST['prenom_pere'];
        $natio_pere = $_POST['natio_pere'];
        $nom_mere = $_POST['nom_mere'];
        $prenom_mere = $_POST['prenom_mere'];
        $natio_mere = $_POST['natio_mere'];


        if(!isset($_POST['nom_municipalite']))
            $nom_municipalite=null;
        else
            $nom_municipalite=$_POST['nom_municipalite'];

        // validation
        if (empty($code_n)) $erreur="Veuillez entre le code";

        else{
        $sql = " UPDATE `naissances` SET code_naiss=$code_naiss,nom='$nom',prenom='$prenom',sexe='$sexe',date_naiss='$date_naiss',
        h_naiss='$h_naiss',lieu_naiss='$lieu_naiss',nom_pere='$nom_pere',prenom_pere='$prenom_pere',natio_pere='$natio_pere',nom_mere='$nom_mere',prenom_mere='$prenom_mere',natio_mere='$natio_mere',nom_municipalite='$nom_municipalite' WHERE code_naiss=$code_naiss";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Success!!")';
       

            echo '</script>';
            header('location:vue_naissances.php');
        }

    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css1/form_naiss1.css">
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
            <p>Registre Naissance</p>
        </div>
        <form action="" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="code_n">Numéro régistre</label>
                    <input type="text" id="code"
                    placeholder="Entrer code registre" name="code_n" value="<?php echo $code_naiss;?>">
                </div>
                <div class="input_box">
                    <label for="code">Nom</label>
                    <input type="text" id="nom"  name="nom"  
                    placeholder="Entrer nom" value="<?php echo $nom;?>">
                </div>
                <div class="input_box">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom"        
                    placeholder="Entrer prenom" value="<?php echo $prenom;?>">
                </div>
                <div class="input_box">
                    <label for="naissance">Date de naissance</label>
                    <input type="date" id="naissance" name="date_naiss" value="<?php echo $date_naiss;?>">
                </div>
                <div class="input_box">
                    <label for="h_naiss">Heure de naissance</label>
                    <input type="time" id="h_naiss" name="h_naiss" value="<?php echo $h_naiss;?>">
                </div>
                <div class="input_box">
                    <label for="lieu">Lieu de naissance</label>
                    <input type="text" id="lieu" name="lieu_naiss"
                    placeholder="Entrer lieu naissance" value="<?php echo $lieu_naiss;?>">
                </div>
                <div class="input_box">
                    <label for="nom_pere">Nom Père</label>
                    <input type="text" id="nom_pere" name="nom_pere"
                    placeholder="Entrer nom père" value="<?php echo $nom_pere;?>">
                </div>
                <div class="input_box">
                    <label for="code">Prénom père</label>
                    <input type="text" id="prenom_père" name="prenom_pere"
                    placeholder="Entrer prénom père" value="<?php echo $prenom_pere;?>">
                </div>
                <div class="input_box">
                    <label for="nom_mère">Nom mère</label>
                    <input type="text" id="nom_mere" name="nom_mere"
                    placeholder="Entrer prénom père" value="<?php echo $nom_mere;?>">
                </div>
                <div class="input_box">
                    <label for="prenom_mère">Prénom mère</label>
                    <input type="text" id="prenom_mere" name="prenom_mere"
                    placeholder="Entrer prénom mère" value="<?php echo $prenom_mere;?>">
                </div>
                <div class="input_box">
                    <label for="natio">Nationalité père</label>
                    <input type="text" id="natio_pere" name="natio_pere"
                    placeholder="Entrer Nationalité" value="<?php echo $natio_pere;?>">
                </div>
                <div class="input_box">
                    <label for="prenom_mère">Nationalité mère</label>
                    <input type="text" id="natio_mere" name="natio_mere"
                    placeholder="Entrer prénom mère" value="<?php echo $natio_mere;?>">
                </div>
               
             
                <?php
                include('init.php');
                $municipalite_result=mysqli_query($conn,"SELECT `nom` FROM `municipalite`");
                echo '<div class="input_box">';
                echo '<select name="nom_municipalite">';
                echo '<option selected disabled>Municipalité</option>';
                while($row = mysqli_fetch_array($municipalite_result)){
                    $display=$row['nom'];
                    echo '<option value="'.$display.'">'.$display.' </option>';
                }
                echo '</select>';
                echo '</div>';
                ?>
                
            </div>
            <div class="gender">
                <span class="gender_title">Genre</span>
                <input type="radio"  id="radio_1" value="maxculin" name="sexe" >
                <input type="radio"  id="radio_2" value="feminin" name="sexe">

                <div class="category">
                    <label for="radio_1">
                        <span class="dot one"></span>
                        <span>Maxculin</span>
                    </label>
                    <label for="radio_2">
                        <span class="dot two"></span>
                        <span>Feminin</span>
                    </label>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Mise à jour" name="valider">
            </div>
        </form>
    </div>  
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <footer>
 <?php include('footer.php');?>
</body>
</html>
