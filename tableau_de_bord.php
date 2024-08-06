<?php
    include("init.php");
    
    $no_of_municipalite=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `municipalite`"));
    $no_of_naissances=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `naissances`"));
    $no_of_deces=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `deces`"));
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>ETAT CIVIL</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css1/statistique.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php include 'background_image.php';?>
<!--header debut-->
<?php include 'navbar.php';?>
<!--header fin-->

          <div class="container-fluid " id="mat">
            <div class=" row g-3 mt-3 d-flex justify-content-center ">
              <div class="col-md-3">
                <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                  <div>
                      <h3 class="fs-2"><?php echo$no_of_municipalite[0]; ?></h3>
                      <p class="fs-5 text-white">Municipalité</p>
                  </div>
                  <img src="./images1/town-hall (1).png" id="logo" alt="mairie">

                </div>
              </div>

              <div class="col-md-3">
                <div class="p-3 bg-info shadow-sm d-flex justify-content-around align-items-center rounded ">
                  <div>
                      <h3 class="fs-2"><?php echo  $no_of_naissances[0]; ?></h3>
                      <p class="fs-5 text-white" >Naissances</p>
                  </div>
                  <img src="./images1/baby-boy.png" id="logo" alt="bithday">
                </div>
              </div>

              <div class="col-md-3">
                <div class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
                  <div>
                      <h3 class="fs-2"><?php echo $no_of_deces[0]; ?></h3>
                      <p class="fs-5 text-white">Décès</p>
                  </div>
                  <img src="./images1/deceased.png" id="logo" alt="death">
                </div>
              </div>

            </div>
          </div>
          <?php
      ?>
      <div class="container mt-5 bg-danger rounded py-3">
        <marquee behavior="scroll" direction="left"><h1 class="text-white"><span class=" py-5">BIENVENUE</span>  DANS NOTRE ESPACE ETAT CIVIL</h1></marquee>
      </div>
      <h1 class="text-center mt-5 text-white">LE SERVICE DE SE FAIRE UN ACTE DE NAISSANCE OU ACTE DE DECES!<br><p>Nous sommes là pour vous.</p></h1>

 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <?php include('footer.php');?>
</body>
</html>