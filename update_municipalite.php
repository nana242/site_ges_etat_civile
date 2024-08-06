<?php 
include('init.php');
$id=$_GET['updateid'];
$sql="SELECT * FROM `municipalite` WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$nom=$row['nom'];

	include('init.php');
    if(isset($_POST['btn'])) {
    @$id_municipalite=$_POST["id_municipalite"];
    @$nom_municipalite=$_POST["nom_municipalite"];
    @$error="";
    @$erreur="";
        // validation
        if(empty($id_municipalite)) $erreur="Entrer code municipalite!";
        elseif(empty($nom_municipalite)) $error="Entrer nom municipalite!";
        
        else{
        $sql = "UPDATE `municipalite` SET id=$id, nom='$nom' WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid class name or class id")';
            echo '</script>';
        } else{
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
    <link rel="stylesheet" href="./css1/form_municipalite.css">
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
            <p>Ajouté municipalité</p>
        </div>
        <form action="" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="code">Code Municipalité</label>
                    <input type="text" id="code"
                    placeholder="Entrer code municipalité" name="id_municipalite" value="<?php echo $id ?>"
                    >
                </div>
               
                <div class="input_box">
                    <label for="nom">Nom municipalité</label>
                    <input type="text" id="nom"  name="nom_municipalite"    value="<?php echo @$nom ?>"
                    placeholder="Entrer nom municipalité"
                    >
                </div>
           <div style="text-align:center; color:red; font-weight:500;"><?php echo @$erreur ?></div>

                <div style="text-align:center; color:red; font-weight:500;" ><?php echo @$error ?></div>

            </div>
            <div class="reg_btn">
                <input type="submit" value="Enregistrer" name="btn">
            </div>
        </form>
    </div>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <footer>
 <?php include('footer.php');?>
</body>
</html>
