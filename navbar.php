<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css1/navbar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.esm.js.map"></script>
    <title>ETAT CIVIL</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    <!--en_tête debut-->
<header>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0" href="#"><span class="text-success">E</span>TA<span class="text-warning">T</span>CI<span class="text-danger">V</span>IL <img src="./images1/pngegg.png" alt="" style="whidth:30px; height:30px;"></a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tableau_de_bord.php"></i>Dashboard</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Municipalité</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_municipalite.php">Ajouter</a></li>
                        <li><a class="dropdown-item" href="vue_municipalite.php">Vue</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Naissances</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_naissances.php">Ajouter</a></li>
                        <li><a class="dropdown-item" href="vue_naissances.php">vue</a></li>
                        </ul>
                    </li>
            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Décès</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_deces.php">Ajouter</a></li>
                        <li><a class="dropdown-item" href="vue_deces.php">vue</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">imprimer</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="form_acte_naiss.php">Acte de naissance</a></li>
                        <li><a class="dropdown-item" href="form_acte_deces.php">Acte de décès</a></li>
                        </ul>
                    </li>
    
                    </ul>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <a href="logout.php" class="btn btn-primary">Déconnexion</a>
                    </div>
                    </div>
                </div>
                </nav>
    </header>
    <!--en_tête fin-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>