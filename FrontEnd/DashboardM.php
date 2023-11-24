<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-scroll  shadow-0 border-bottom border-dark">
      <div class="container">
        <img src="../Image/log.png" alt="logo" class="rounded-4"  style="width: 80px; height: 60px;">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto d-flex gap-5">
            <li class="nav-item">
              <a class="nav-link" href="#!">Mes Equipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="MesProjets.php">Mes Projets</a>
            </li>
            
            <button type="button" class="btn btn-outline-danger  ms-3">Log Out</button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <h1 class="d-flex justify-content-center mt-5"> Mes Equipes </h1>

    <div class=" d-flex justify-content-center ">
      <div class="col-md-10 px-2 ">
        <table class="table mt-4">
          <thead>
             <tr class="height1">
              <th class=" align-middle">ID_Equipe</th>
              <th class=" align-middle">Date_creation</th>
              <th class=" align-middle">Nom_equipe</th>
              <th class=" align-middle">ID_Personnel</th>
              <th class=" align-middle">Nom</th>
              <th class=" align-middle">Prenom</th>
              <th class=" align-middle">Email</th>
              <th class=" align-middle">Telephone</th>
              <th class=" align-middle">Role</th>
              <th class=" align-middle">Statut</th>   
             </tr>
          </thead>
        </table>
      </div>
    </div>

    
</body>
</html>