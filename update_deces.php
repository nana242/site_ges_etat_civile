<?php
      include('init.php');
      $code_deces=$_GET['update_code_deces'];
      $sql="SELECT * FROM `deces` WHERE code_deces=$code_deces";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      $code_deces=$row['code_deces'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $sexe=$row['sexe'];
      $date_naiss=$row['date_naiss'];
      $lieu_naiss=$row['lieu_naiss'];
      $date_deces=$row['date_deces'];
      $h_deces=$row['h_deces'];
      $lieu_deces=$row['lieu_deces'];
      $profession=$row['profession'];
      $D_defunt=$row['D_defunt'];
      $cause_deces=$row['c_deces'];
      $nom_municipalite=$row['nom_municipalite'];

    if(isset($_POST['valider'])) {
        $code_d = $_POST['code_d'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        @$sexe = $_POST['sexe'];
        $date_naiss= $_POST['date_naiss'];
        $lieu_naiss = $_POST['lieu_naiss'];
        $date_deces = $_POST['date_deces'];
        $h_deces = $_POST['h_deces'];
        $lieu_deces = $_POST['lieu_deces'];
        $profession = $_POST['profession'];
        $D_defunt = $_POST['D_defunt'];
        $cause_deces = $_POST['cause_deces'];

        if(!isset($_POST['nom_municipalite']))
            $nom_municipalite=null;
        else
            $nom_municipalite=$_POST['nom_municipalite'];

        // validation
        if (empty($code_d)) $erreur="Veuillez entre le code";

        else{
        $sql = "UPDATE  `deces` SET code_deces='$code_deces', nom='$nom', prenom='$prenom',sexe='$sexe',date_naiss='$date_naiss',lieu_naiss='$lieu_naiss'
        ,date_deces='$date_deces',h_deces='$h_deces', lieu_deces='$lieu_deces',profession='$profession',D_defunt='$D_defunt',c_deces='$cause_deces', nom_municipalite='$nom_municipalite' WHERE code_deces='$code_deces' ";
        $result1=mysqli_query($conn,$sql);
        
        if (!$result1) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Success!!")';
            echo '</script>';
           
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
    <link rel="stylesheet" href="./css1/form_deces.css">
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
            <p>Registre Décès</p>
        </div>
        <form action="" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="code_d">Numéro régistre</label>
                    <input type="text" id="code" name="code_d"
                    placeholder="Entrer code registre" required value="<?php echo $code_deces;?>">
                </div>
                <div class="input_box">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom"
                    placeholder="Entrer nom" required value="<?php echo $nom;?>">
                </div>
                <div class="input_box">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom"
                    placeholder="Entrer prenom" required value="<?php echo $prenom;?>">
                </div>
                <div class="input_box">
                    <label for="naissance">Date de naissance</label>
                    <input type="date" id="naissance" name="date_naiss"
                    placeholder="Entrer date de naissance" required value="<?php echo $date_naiss;?>">
                </div><div class="input_box">
                    <label for="lieu_naiss">Lieu de naissance</label>
                    <input type="text" id="lieu_naiss" name="lieu_naiss"
                    placeholder="Entrer lieu naissance" required value="<?php echo $lieu_naiss;?>">
                </div>

                <div class="input_box">
                    <label for="date_deces">Date de décès</label>
                    <input type="date" id="date_deces" name="date_deces" required value="<?php echo $date_deces;?>">
                </div>
                <div class="input_box">
                    <label for="h_deces">Heure du décès</label>
                    <input type="time" id="h_deces" name="h_deces" required value="<?php echo $h_deces;?>">
                </div>
                <div class="input_box">
                    <label for="lieu_deces">Lieu du décès</label>
                    <input type="text" id="lieu_deces" name="lieu_deces"
                    placeholder="Entrer lieu de déces" required value="<?php echo $lieu_deces;?>">
                </div>
                <div class="input_box">
                    <label for="profession">Profession</label>
                    <input type="text" id="nom_pere" name="profession"
                    placeholder="Entrer profession" required value="<?php echo $profession;?>">
                </div>
                <div class="input_box">
                    <label for="domicile">Domicile du défunt</label>
                    <input type="text" id="domicile" name="D_defunt"
                    placeholder="Entrer domicile défunt" required value="<?php echo $D_defunt;?>">
                </div>
                <div class="input_box">
                    <label for="cause_deces">Cause du décès</label>
                    <input type="text" id="cause_deces" name="cause_deces"
                    placeholder="Entrer cause décès"
                     required value="<?php echo $cause_deces;?>">
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
               
            </div>
            <div class="gender">
                <span class="gender_title">Genre</span>
                <input type="radio"  id="radio_1" value="maxculin" name="sexe">
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
                <input type="submit" value="Enregistrer" name="valider">
            </div>
        </form>
    </div>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <footer>
 <?php include('footer.php');?>
</body>
</html>
