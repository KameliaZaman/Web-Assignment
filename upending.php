<!DOCTYPE html>
<html>
<head>
	<title>Pending</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" type="image/x-icon" href="technical-support.png" />
  <!---font-family--->
  <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
  <!---bootstrap--> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:-30px;margin-top:-30px;">
  <img src="technical-support.png"class="img1"><h1 class="hire1">Hire A Helper</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="uhome.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="upending.php">Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ucomplete.php">Complete</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="index.php">Log Out</a>
      </li> 
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">

      <div class="container-fluid mt-3">
      <div class="card1 shadow mb-4">

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> Service Name </th>
                </tr>
              </thead>
              <tbody>
              
              <?php
                session_start();

          $conn = mysqli_connect("localhost", "root", "", "myService");


              $disp="select * from pending";
              $result=mysqli_query($conn,$disp);
              if(mysqli_num_rows($result) > 0)        
              {
              while($row=mysqli_fetch_array($result))
              {
                $p=$row['UserEmail'];
                  if($p==$_SESSION["person"])
                  {
                ?>
                <tr>
                  <td> <?php echo $row['SName']; ?></td>
                  </tr>
                  
                <?php
                }
              }
            }
            else {
                  echo "No Record Found";
              }
        mysqli_close($conn);

      ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>

      </div>
  
</div>

<div class="jumbotron text-center" style="margin-bottom:0 ;background-color:#0e6b28;height: 270px;">
  <div class="address" style="margin-top:-40px;"><i class="fas fa-map-marker-alt"></i>  24th street, west London, UK 
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
        <p style="color: white;
  font-size: 1.5rem;">
          Hire A Helper &#169; 2021 
        </p>
</div>


</body>
</html>