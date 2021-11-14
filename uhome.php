<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
                  <th> Service Details </th>
                  <th> Price </th>
                  <th> Book </th>
                </tr>
              </thead>
              <tbody>
              
              <?php
                session_start();

          $conn = mysqli_connect("localhost", "root", "", "myService");


          if (!$conn) {
            die("Connection failed: ". mysqli_connect_error());
          }

          if(isset($_POST["delete_btn"]))
                        {
                          $id = $_POST['delete_id'];
                          $query = "INSERT INTO pending VALUES ('$_SESSION[person]','$id') ";
                          $query_run = mysqli_query($conn, $query);

                          if($query_run)
                          {
                              echo "Added!";
                          } 
                        }

              $disp="select * from services";
              $result=mysqli_query($conn,$disp);
              $disp2="select * from pending";
              $result2=mysqli_query($conn,$disp2);
              if(mysqli_num_rows($result) > 0)        
              {
              while($row=mysqli_fetch_array($result))
              {
                $p=$row['SName'];
                $x=0;
                if(mysqli_num_rows($result2) > 0)        
                {
                while($row2=mysqli_fetch_array($result2))
                {
                  if($row2['UserEmail']==$_SESSION["person"] && $row2['SName']==$p)
                  {
                    $x++;
                  }
                }
                }
                if($x!=0)
                {
                  $x=0;
                }
                else
                {
                ?>
                <tr>
                  <td> <?php echo $row['SName']; ?></td>
                  <td> <?php echo $row['SDetails']; ?></td>
                  <td> <?php echo $row['price']; ?></td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
                    Book service
                  </button>
                  <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="POST">

              <div class="modal-body">

                <!-- Credit Card Payment Form - START -->
                    <div class="panel-heading">
                            <div class="inlineimage"> <img class="img-responsive1 images1" style="width: 20%;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png"> <img class="img-responsive1 images1" style="width: 20%;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png"> <img class="img-responsive1 images1" style="width: 20%;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png"> <img class="img-responsive1 images1" style="width: 20%;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png"> </div>
                    </div>
                            <div class="row2">
                                <div class="col-md-12">
                                    <div class="form-group1" style="padding-top: 20px;"> <label >CARD NUMBER</label>
                                      <input type="text" autocomplete="off" class="form-control" placeholder="Valid Card number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="col-md-7">
                                    <div class="form-group1"> <label  style="padding-top: 20px;">EXPIRATION DATE</label> 
                                      <input type="date" class="form-control" placeholder="MM / YY" /> </div>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="col-md-12">
                                    <div class="form-group1" style="padding-top: 20px;"> <label>CARD OWNER</label> 
                                      <input type="text" class="form-control" placeholder="Card Owner Name" /> </div>
                                </div>
                            </div>
                    
                    <div class="row2">
                      <div class="col-md-7">
                  <div class="form-group1" style="padding-top: 20px;">
                      <input type="hidden" name="delete_id" value="<?php echo $row['SName']; ?>">
                      <button type="submit" name="delete_btn" class="btn btn-success"> Confirm Payment </button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
                </div>
              
              </div>
            </form>

          </div>
        </div>
      </div>

                  </td>
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