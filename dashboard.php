
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/styles/dashboard.style.css">
</head>
<body>
    <div class="d-flex " id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="slide-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"> 
                <i class="fas fa-user-secret me-2"></i>codersbite
            </div> 
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>dasboard
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-light fa-file-pen"></i>update
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-trash"></i></i>delete
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-user-plus"></i>ajouter
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-gift me-2"></i>product
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-comment-dots me-2"></i>chat
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-map-marker-alt me-2"></i>outlet
                </a>
                <a href="#"class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
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
                                <ul class="dropdown-menu" aria-labelledby="navbarDrown">
                                    <li><a href="#"class="dropdown-item">Profile</a></li>
                                    <li><a href="#"class="dropdown-item">Settings</a></li>
                                    <li><a href="#"class="dropdown-item">logout</a></li>
                                </ul>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <h2>Listes candidatures</h2>
            </div>
            <div class="container">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
           
                
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>