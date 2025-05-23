



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EAU project </title>

  <!-- Vendor CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css\style.css" rel="stylesheet">
  

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                
                  <span class="d-none d-lg-block btn-primary">EAU Project </span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                
    <?php  
    include_once("./config/db.php");

    $conn=getConnection();
    if (isset($_POST["btnLogin"])){
     $username=$_POST["username"];
     $password=md5($_POST["username"]);
     $sql="select * from  users where username ='$username' and password='$password'";
     $result=$conn->query($sql);
     if ($result->num_rows>0){
        $userdata=$result->fetch_assoc();
        header("location:index.php");


     }else{
        echo "Fadlan hubi username ama password";
     }

    }
    ?>

                </div>

                  <form class="row g-3 needs-validation" action="./login.php" method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                  
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="btnLogin">Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


</body>

</html>