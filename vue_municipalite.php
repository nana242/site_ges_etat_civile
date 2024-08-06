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
           @media only screen and (max-width:800px){
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
             border: none;
             
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
           height:135vh;
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
             <h4 class="text-center">Gestion municipalité</h4>
          </div>
          <div class="card-body">
          <div class="table-responsive " id="change">
          <table class="table table-striped display mt-3 table-hover" >
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Code municipalité</th>
              <th scope="col">Nom municipalité</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
            <?php
            include('init.php');

            $sql = "SELECT `nom`, `id` FROM `municipalite`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
           
                $cnt=1;
                        while($row = mysqli_fetch_array($result))
                        {
                          ?>
                            <tbody>
                              <tr>
                                  <td data-title="#ID"><?php echo $cnt;?></td>
                                  <td data-title="CODE DE NAISSANCE"><?php echo $row['id'];?></td>
                                  <td data-title="MUNICIPALITE"><?php echo $row['nom'];?></td>
                                  <td data-title="ACTION"><a href="delete-municipalite.php?id=<?php echo $row['id'];?>" id="supp">Supprimer</a>&nbsp&nbsp&nbsp<a href="update_municipalite.php?updateid=<?php echo $row['id'];?>" class="add">Modifier</a></td>
                              </tr>
                            </tbody>
                          <?php
                $cnt++; 
                        }

            
               }
               else
               {
                 ?>
                     <tr>
                       <td colspan="4">No record found</td>
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