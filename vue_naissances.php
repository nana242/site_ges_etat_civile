<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>ETAT CIVIL</title>
    <link rel="stylesheet" href="./css1/form_table.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <style>
        @media only screen and (max-width:1200px){
          #change,tbody,td,tr{
              display:block;
          }
          #change thead tr{
             position:absolute;
             top: -9999px;
             left: -9999px;
          }
          #change td{
             position: relative;
             padding-left:50%;
             
          }
          #change td:before{
            content:attr(data-title);
            position:absolute;
            left:6px;
            font-weight:bold;
          }
          #change td{
            border-bottom:1px solid #ccc;
          }
          body{
            background-image:url('./images1/mairie.jpg');
           height:140vh;
          }
          footer{
            padding:5px;
          }

        }
      </style>
</head>
<body>
<?php include 'background_image.php';?>
<!--header debut-->
<?php include 'navbar.php';?>
<!--header fin-->

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">

      </div>
 
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
             <h4 class="text-center">Gestion de naissance</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive " id="change">
          <table id="table" class="table table-striped display mt-3 table-hover">
            <thead class="bg-dark text-light">
               <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Code Naiss</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">sexe</th>
                  <th scope="col">Date naiss</th>
                  <th scope="col">Heure naiss</th>
                  <th scope="col">Lieu naiss</th>
                  <th scope="col">Municipalité</th>
                  <th scope="col">Action</th>
                </tr>
             </thead>
            <?php
            include('init.php');

            $sql = "SELECT `code_naiss`, `nom`,`prenom`, `sexe`,`date_naiss`,`h_naiss`,`lieu_naiss`,`nom_municipalite` FROM `naissances`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
           
         
                $cnt=1;
                while($row = mysqli_fetch_array($result))
                  {
                    ?>
                    <tbody>
                      <tr>
                        <td data-title="#ID"><?php echo $cnt ?></td>
                        <td data-title="CODE DE NAISSANCE"><?php echo $row['code_naiss'];?></td>
                        <td data-title="NOM"><?php echo $row['nom'];?></td>
                        <td data-title="PRENOM"><?php echo $row['prenom'];?></td>
                        <td data-title="SEXE"><?php echo $row['sexe'];?></td>
                        <td data-title="DATE DE NAISSANCE"><?php echo $row['date_naiss'];?> </td>
                        <td data-title="HEURE DE NAISSANCE"><?php echo $row['h_naiss'];?> </td>
                        <td data-title="LIEU DE NAISSANCE"><?php echo $row['lieu_naiss'];?></td>
                        <td data-title="MUNICIPALITE"><?php echo  $row['nom_municipalite'];?></td>
                        <td data-title="ACTION"><a href="delete-naissances.php?code_naiss=<?php echo $row['code_naiss'];?>" id="supp" >Supprimer</a>&nbsp&nbsp&nbsp<a class="add" href="update_naissance.php?update_code_naiss=<?php echo $row['code_naiss']?>">Modifier</a></td>
                      </tr>
                    </tbody>
                    <?php
                 $cnt++; }
              
                
               }
             
               else
               {
                 ?>
                     <tr>
                       <td colspan="9">No record found</td>
                     </tr>
                 <?php

               }
                ?>
              </table> 
              </div>
           

          </div>
        </div>
      </div>

    </div>
  </div>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php include('footer.php');?>
</body>
</html>