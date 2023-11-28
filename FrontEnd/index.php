<?php
include "connexion.php";
$erreur="";
if (isset($_POST["submit"])){
  
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $select="SELECT * FROM users WHERE email= '$email' AND password= '$pass'";
  $query = mysqli_query($conn,$select);
  $row = mysqli_num_rows($query);
  $fetch = mysqli_fetch_array($query);
  if($row == 1){
    $username=$fetch['First_name'];
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['autoriser']= "oui";
    if($fetch["role"]== "user"){
      header("Location: DashboardM.php");
    }
    elseif($fetch["role"]== "scrum_master"){
      header("Location: MesProjets.php");
    }
    else
     header("Location: validation.php");

  } 
  else
   $erreur="L’adresse e-mail ou le mot de passe que vous avez saisi(e) n’est pas associé(e) à un compte. ";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="vh-100" style="background-color: #5483BC;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center">
                    <img src="../Image/10705723_44658.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
                        <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                          <img src="../Image/log.png" alt="logo" style="width: 100px;">
                        </div>
      
                        <h5 class="fw-semibold mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="text-secondary">Email </label>
                          </div>
                          <div class="form-floating mb-4 ">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword" class="text-secondary">Mot de passe</label>
                            <span class=" text-danger "><?php echo $erreur;?></span>
                          </div>
      
                        <div class="pt-1 mb-4 d-flex justify-content-end">
                          <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button> 
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="Inscription.php"
                            style="color: #393f81;">Register here</a></p>
                        <a href="DashboardM.php" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
</body>
</html>