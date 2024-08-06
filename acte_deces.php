<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="acte.css">
    <title>ETAT CIVIL</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      h1{
    text-align:center
 }
.center{
  position: relative;
  right: 0;
}
  button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 6px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:5px;
}
.main2{

    background-color: #ffffff;
    height:100vh;
    font-size:19px;
    padding:0 30px;
    line-height:30px;
    font-family:poppins;
    padding-top:300px;
   /* box-shadow:0 8px 8px rgba(0,0,0,0.6);*/
    max-width: 1200px;
    margin: auto;
}

.p{
    font-size:1.5rem;
    text-align:justify;
}
  
  .entete{
    position:absolute;
    top:5%;
    right:80px;
  }

  .entete2{
    position:absolute;
    top:5%;
    left:100x;
    line-height:16px;
  }
  @media print {
    body * {
      visibility: visible;
    }
    .bx,button,title{
        visibility: hidden;
    }
  }
      body{
        background:linear-gradient(rgba(15,23,43,0.2),rgba(15,23,43,0.9)),url(./images1/m.jpg);
    background-size:cover; 
    background-position:center;
    background-repeat: no-repeat;
    /*background: #f6f8fa;*/
    font-family: 'poppins';
    background-attachment: fixed;
    height:100vh;
}
.error{
  background:#fbd0d9;
  margin-top:50px;
  text-align:center;
  font-family:'poppins';
  width:300px;
  position:relative;
  left:50%;
  top:30%;
  font-size:17px;
  padding:20px 100px;
  transform:translate(-50%, -30%);
  border-radius:5px;
  border:1px solid red;
}


    </style>
</head>
<body>
  
    <?php
        include("init.php");
        if(!isset($_POST['nom_municipalite']))
            $nom_municipalite=null;
        else
            $nom_municipalite=$_POST['nom_municipalite'];
        $id_municipalite=$_POST['id_municipalite'];

        // validation
        if (empty($nom_municipalite) or empty($id_municipalite) or preg_match("/[a-z]/i",$id_municipalite)) {
            if(empty($id_municipalite))
                echo '<p class="error">Entrer code décès</p>';
           elseif(empty($nom_municipalite))
                echo '<p class="error">Selectionner Municipalité</p>';  
            elseif(preg_match("/[a-z]/i",$id_municipalite))
                echo '<p class="error">Code de décès invalide!</p>';
            exit();
        }

        $deces_sql=mysqli_query($conn,"SELECT * FROM `deces` WHERE `code_deces`='$id_municipalite' and `nom_municipalite`='$nom_municipalite'");
        while($row = mysqli_fetch_assoc($deces_sql))
        {
        $code_deces = $row['code_deces'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $sexe = $row['sexe'];
        $date_naiss = $row['date_naiss'];
        $lieu_naiss = $row['lieu_naiss'];
        $date_deces=$row['date_deces'];
        $h_deces = $row['h_deces'];
        $lieu_deces=$row['lieu_deces'];
        $profession=$row['profession'];
        $D_defunt=$row['D_defunt'];
        $c_deces=$row['c_deces'];
        $municipalitee= $row['nom_municipalite'];
        }

        if(mysqli_num_rows($deces_sql)==0){
          echo '<div style="background: #12a8e496; margin:0 300px;  border-radius:5px;padding:10px; font-family:poppins;margin-top:225px;
          border:5px solid crimson;" >';
            echo  '<h1 style=" text-align:center; color:crimson; text-shadow:2px 2px 2px white;">Aucun No et municipalité correspondent à l\'acte de décès </h1>';
            echo  '<p style=" text-align:center; font-size:20px; color:white;">Veuillez selectionner la municipalité et le numéro correspondant à l\'acte de décès </p>';
            echo '</div>';
            exit();
        }
     else{
echo '<script type="text/javascript">
window.alert("sucess");
</script>';

}
    ?>

   
        <div class="main2">
           <div class="center" >
                  <button onclick="window.print()"><i class="bx bx-printer"></i>Imprimer</button>
          </div>

          <div class="entete2">
                <p>Région du pool</p>
                <p>Département du pool</p>
                <p>commune de <b><?php echo $municipalitee ?></b></p>
             </div>

             <div class="entete">
                <h3>République du Congo</h3>
                <p style="font-size:16px; text-align:center; line-height:5px;">Unité -:- Travail -:- Progrès</p>
             </div>
                <h1>ACTE DE DECES</h1>
                <p  style="text-align:center; line-height:2px;">---------------------------------------------------------</p>
                <div class="code-acte">
                <p style="text-align:center;">ACTE<i> N<sup>o</sup>:</i><b><?php echo $code_deces?></b></p>
             <div class="p">
                    <p>Nous soussignés, Mairie de la commune de <b><?php echo $nom_municipalite?></b>   Officier de l'état civil du centre principale, certifions que:</p> 
                   <p> le <b><?php echo $date_deces ?></b> à <b><?php echo $h_deces ?></b> est décédé à <b><?php echo $lieu_deces ?></b>  <b><?php echo "$nom $prenom" ?></b> de sexe <b><?php echo $sexe?></b> né(e) le <b><?php echo $date_naiss?></b> à <b><?php echo $lieu_naiss?></b> profession <b><?php echo $profession?></b> domicilier au N<sup>o</sup>  <b><?php echo $D_defunt ?></b> </p>  
                  
                   
                </div>
                <div class="row">
                  <div class="container">
                
              </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>