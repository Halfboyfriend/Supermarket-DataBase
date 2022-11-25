<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <title>Login BackOffice</title>
</head>
<body>
<?php
  $errName= "";
if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $password = $_POST['password'];
 
   if($name == 'admin')
   {
       if($password == '*****')
       {
           echo "Login Successfully";
       header('location: dashboard.php');
       } else{
            $errName = "User Doesnt Exist";
           echo $errName;
           header('location: login.php');
       }
   } else{
      
       $errName = "User Doesnt Exist";
       echo $errName;
       header('location: login.php');
   }
   exit(1);

}



?>

    <section class="vh-100" style="background-color: #b82a49;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="login.php" method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <img src="./images/cart.png" alt="" width="30">
                          <span class="navbar-brand mb-0 h1"><h2>Peculiar Plus</h2> </span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your office</h5>
      
                        <div class="form-outline mb-4">
                         
                            <label class="form-label" for="name">Username</label> 
                            <?php echo $errName; ?>
                          <input type="text" name="name" id="name" class="form-control form-control-lg" required/>
                          
                        </div>
      
                        <div class="form-outline mb-4">
                        <?php echo $errName; ?>
                            <label class="form-label" for="password">Password</label>
                          <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                         
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" name="submit" >Login</button>
                        </div>

                      
      
                       
                        <a href="#!" class="small text-muted">Privacy policy(ITeachItech)</a>
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
