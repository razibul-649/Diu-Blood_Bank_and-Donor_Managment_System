<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>

    <!-- Page Content -->
    <div class="container">

        <h1 style=" color:#2596be" class="my-4">Welcome to DIU BloodBank & Donor Managment System.</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">When Blood Is Important</h4>

                        <p class="card-text" style="padding-left:2%">The patient are always indened the blood for there operation.But the emergency time the blood manage more difficult for there relative. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Given Tips</h4>

                        <p class="card-text" style="padding-left:2%"> For the given donar at first add on this managment system then needer can mange the blood easilyS. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who Could Help You</h4>

                        <p class="card-text" style="padding-left:2%">Anyone who have a diu blood bank account he can help you if you  as patient or donar. </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2 style="color: blue">List of Some Donar</h2>

        <div class="row">
                   <?php
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood_doner.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
                        <p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
                        <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
                        <p class="card-text"><b>Mobile Number :</b> <?php echo htmlentities($result->MobileNumber);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>





        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2 style=" color:blue">TYPE OF BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>


             <li style="color:red">A positive or A negative</li>
             <li style="color:red">B positive or B negative</li>
             <li style="color:red">O positive or O negative</li>
             <li style="color:red">AB positive or AB negative.</li>
                </ul>
                <p>Giving blood is a simple, safe way to make a big difference in people’s lives. Knowing what to expect before, during, and after you donate can help you prepare for the process.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/doner3.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="color:blue">MOTIVATION </h4>
                <div>
                    <ul>
                        <li> “We make a living by what we get. We make a life by what we give.”</li>
                        <li>“Blood Donation will cost you nothing, but it will save a life!”</li>
                        <li>“If you really want to lend a hand, lend an arm.”</li>
                        <li>“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</li>
                        <li>“Donate your blood for a reason, let the reason to be life.”</li>
                        <br>
                        
                    </ul>
                     <div>
                       <img class="img-fluid rounded" style=" margin:10px 150px 10px 150px" src="images/motivation.jpg">
                     </div>
                        
                
                    
                </div>
                
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php"><span style=" color:blue">Become a Donar</span></a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
