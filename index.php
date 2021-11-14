<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" type="image/x-icon" href="technical-support.png" />
  <!---font-family--->
  <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
  <!---bootstrap--> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
          session_start();
            $conn = mysqli_connect("localhost", "root", "", "myService");


                  if (!$conn) {
                    die("Connection failed: ". mysqli_connect_error());
                  }

                  if(isset($_POST['login'])){
                    $a=$_POST['email'];
                    $b=$_POST['pass'];
                    
                    $disp="select * from user";
                    $result=mysqli_query($conn,$disp);
                    $cnt=0;
                    $flg=0;

                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['UserEmail']==$a && $row['UserPass']==$b)
                      {
                        $_SESSION["person"] = $a;
                        $cnt++;
                      }
                      if($a=="kamelia19979@gmail.com" && $b=="123")
                      {
                        $flg=1;
                      }
                    }
                    if($cnt==0)
                    {
                      echo '<div style="text-align:center; color:red;">No user found! Create a new account</div>';
                    }
                    if($flg==1)
                    {
                      header("Location: https://localhost/assignment/adhome.php");
                    }
                    else if($cnt!=0 && $flg!=1)
                    {
                      header("Location: https://localhost/assignment/uhome.php");
                    }
                  }

                  if(isset($_POST['signup'])){
                    $a=$_POST['yname'];
                    $b=$_POST['ymail'];
                    $c=$_POST['ypass'];
                    $d=$_POST['ycpass'];
                    $e=$_POST['yphone'];
                    if($c!=$d)
                      echo '<div style="text-align:center; color:red;">Password did not match</div>';
                    else if($a!="" && $b!="" && $c!="" && $e!="")
                    {
                      $query = "INSERT INTO user VALUES ('$a', '$b', '$c','$e')";

                      if (mysqli_query($conn, $query)) {
                         echo '<div style="text-align:center; color:green;">Account Created!</div>';
                      }
                    }
                    else
                    {
                      echo '<div style="text-align:center; color:red;">Please fill all the fields</div>';
                    }
                  }
                mysqli_close($conn);
          ?>
  <main>
    <div class="row">

    <!--left upper banner-->
      <div class="col-sm-6">
        <img src="technical-support.png"class="img"><h1 class="hire">Hire A Helper</h1>
        <h3 class="words">Avoid your home maintainance hazards. We will help you find someone who will remove all your problems. We provide services like- electrical, cleaning, plumbing, pest control, painting, geyser service and many more!</h3>
      </div>

    <!--right banner-->
    <div class="col-sm-6">
      <div class="card1">
        <div class="card-body">

          <form method="POST">

          <div class="mb-3">
            <input name="email" type="Email" class="form-control" placeholder="Email address">
          </div>

          <div class="mb-3">
            <input name="pass" type="password" class="form-control" placeholder="Password">
          </div>

            <button name="login" type="submit" class="btn-btn-primary">Log In</button>

            <hr>

          <button type="button" class="btn-btn-primary1" data-toggle="modal" data-target="#exampleModal">
            Create a new account
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--sign up form-->
                  <form method="POST">
                    <div class="mb-3">
                      <input name="yname" type="text" class="form-control"  id="formGroupExampleInput" placeholder="Your Name">
                    </div>

                    <div class="mb-3">
                      <input name="ymail" type="Email" class="form-control"  id="formGroupExampleInput" placeholder="Your Email address">
                    </div>

                    <div class="mb-3">
                      <input type="date" class="form-control"  id="formGroupExampleInput">
                    </div>

                    <div class="mb-3">
                      <input name="yphone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your phone number">
                    </div>

                    <div class="mb-3">
                      <input name="ypass" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                    </div>

                    <div class="mb-3">
                      <input name="ycpass" type="password" class="form-control"  id="formGroupExampleInput" placeholder="Confirm Password">
                    </div>

                  </form>

                </div>
                <div class="modal-footer">
                  <h6>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</h6>
                  <button type="button" class="btn-btn-secondary" data-dismiss="modal">Cancel</button>
                  <button name="signup" type="submit" class="btn-btn-primary2">Sign Up</button>
                </div>
              </div>
            </div>
          </div>

          </form>

          
        </div>
      </div>

    </div>

    </div>

    <!--Services-->
    <h1 class="service">
      <b>Our Services</b>      
    </h1>
    <!-----service cards--->
    <div>
    <section id="recipes"></section>
    <div class="card-group">
  <div class="card">
    <p class="icon">
<i class="fas fa-hands-wash"></i>
    </p>
    <div class="card-body">
      <p class="card-text">
           Cleaning
      </p>
    </div>
  </div>
  <div class="card">
    <p class="icon">
     <i class="fas fa-plug"></i>
     </p>
     <div class="card-body">
      <p class="card-text">
        Elecrical
      </p>
    </div>
  </div>
  <div class="card">
    <p class="icon">
    <i class="fas fa-wrench"></i>
    </p>
    <div class="card-body">
      <p class="card-text">
        Plumbing
      </p>
    </div>
  </div>
</div>
  </div>
  <div>
    <section id="recipes"></section>
    <div class="card-group">
  <div class="card">
    <p class="icon">
    <i class="fas fa-paint-roller"></i>
    </p>
    <div class="card-body">
      <p class="card-text">
      Painting
    </p>
    </div>
  </div>
  <div class="card">
    <p class="icon">
    <i class="fas fa-seedling"></i>
    </p>
    <div class="card-body">
      <p class="card-text">
        Gayser Service
      </p>
    </div>
  </div>
  <div class="card">
    <p class="icon">
    <i class="fas fa-pastafarianism"></i>
    </p>
    <div class="card-body">
      <p class="card-text">
        Pest Control
      </p>
    </div>
  </div>
</div>
  </div>

  </main>

  <footer style="margin-top: -300px;">
    <div class="address"><i class="fas fa-map-marker-alt"></i>  24th street, west London, UK 
<br><i class="fas fa-phone"></i>  +44 1819 189000
<br><i class="far fa-envelope-open"></i>  hireahelper364@gmail.com</div>
  <div class="d-flex justify-content-center align-items-center">
        <a
          class="d-inline-flex align-items-center justify-content-center twitter"
          href="#"
          ><i class="fab fa-twitter"></i
        ></a>
        <a
          class="d-inline-flex align-items-center justify-content-center facebook"
          href="#"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <a
          class="d-inline-flex align-items-center justify-content-center instagram"
          href="#"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>
      <ul>
        <li style="color: white;">
          Hire A Helper &#169; 2021 
        </li>
      </ul>
  </footer>

  <!--Bootstrap modal-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>