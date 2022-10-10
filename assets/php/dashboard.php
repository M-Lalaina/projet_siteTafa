<?php
require"connexion.php";
require"insert.php";
require"delete.php";
$sql=mysqli_query($connexion , "SELECT * FROM  candidates");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../styles/css/dashboard.style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="col-md">
            <div class="col-md col-sm d-flex" id="wrapper" >
                <div class="bg-white" id="sidebar-wrapper">
                    <div class="slide-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"> 
                        <i class="fas fa-user-secret me-2"></i>session admin
                    </div> 
                    <div class="col-md-6 list-group list-group-flush my-3 #4a148c purple darken-4">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent text-white active">
                            <i class="fas fa-tachometer-alt me-2"></i>dasboard
                        </a>
                        <a href="update.php"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fa-light fa-file-pen"></i>update
                        </a>
                        <a href="#"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fa-solid fa-trash"style="color:red"></i>delete
                        </a>
                        <a href="#"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fa-solid fa-user-plus"style="color:blue"></i>ajouter
                        </a>
                        <a href="#"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fa-solid fa-file-arrow-down"style="color:blue"></i>download
                        </a>
                        <a href="#"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fas fa-comment-dots me-2" style="color:green"></i>chat
                        </a>
                        <a href="#"class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                            <i class="fas fa-map-marker-alt me-2"></i>outlet
                        </a>
                        <a href="login.php"class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                            <i class="fas fa-project-diagram me-2"></i>logout
                        </a>
                </div>
            </div>
        <!-- slider ends here -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3"id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-multiselectable="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2-lg-0">
                        <li>
                            <li class="nav-item-dropdown">
                                <a href="#" class="nav-link dropdown-toggle second-text fw-bold " id="navbarDropdown" role="button"data-bs-toggle aria-expanded="false">
                                    <i class="fas fa-user me-2"></i>rajo tahina
                                </a>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col">
                       <a href=""> <h2>Listes candidatures</h2></a>
                    </div>
                    <div class="col">
                        <a href="#"><h2>listes des candidats valider</h2></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-md-4 col-sm">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th class="col-sm">ID</th>
                            <th class="col-sm">name</th>
                            <th class="col-sm">firtname</th>
                            <th class="col-sm">email</th>
                            <th class="col-sm">contact</th>
                            <th class="col-sm">CV</th>
                            <th class="col-sm">Cover letter</th>
                            <th class="col-sm">action</th>
                            <th class="col-sm">validation</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                             <?php foreach($sql as $value){?>
                                <tr>
                                    <td><?=$value['id']?></td>
                                    <td><?=$value['name']?></td>
                                    <td><?=$value['firstname']?></td>
                                    <td><?=$value['email']?></td>
                                    <td><?=$value['contact']?></td> 
                                    <td><?=$value['resume_url']?></td>
                                    <td><?=$value['cover_letter_url']?></td>
                                    <td> <a href="delete.php?id=<?=$value['id']?>"class="bg-transparent second-text fw-bold text-decoration-none">
                                    <i class="fa-solid fa-trash"style="color:red"></i>delete </a> </td>
                                    <td> <a href="#"class="bg-transparent second-text fw-bold text-decoration-none ">
                                    <i class=""><input type="checkbox" name="checkbox" style="color:green" id=""></i>valider </a></td>
                                </tr>
                             <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
           
                
        </div>
    </div>
        </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>