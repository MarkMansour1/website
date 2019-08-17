<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Event</title>
  <link rel=icon href=img/favicon.png>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <?php
  session_start();
  include_once("php/dbconnect.php");

  if(isset($_GET['edit'])){
    echo '<h4 style="color: green">Event Added</h4>';
  }
  if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == "emptyfields"){
      echo '<h4 style="color: red">Please fill in all the required fields</h4>';
    }
    else if($error == "sqlerror"){
      echo '<h4 style="color: red">SQL Error</h4>';
    }
  }
  ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0 text-center">

        <h1 class="h1 text-gray-900" style="padding: 3rem 0 1rem" id="title">Edit Event</h1>
        <form action="php/deleteevent.php" method="post">
          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
          <button type="submit" class="btn btn-secondary btn-user">Delete Event</button>
        </form>

        <div class="p-5">
          <form class="user" action="php/editevent.php" method="post">
            <input type="hidden" name="week" value="<?php echo $_GET['week'] ?>">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="hidden" name="week" value="<?php echo $_GET['week'] ?>">
            <input type="hidden" name="day" value="<?php echo $_GET['day'] ?>">
            <input type="hidden" name="time" value="<?php echo $_GET['time'] ?>">
            <input type="hidden" name="repeated" value="1">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" value="<?php echo $_GET['name'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Colour</label>
              <input type="color" name="colour" value="<?php echo '#'.$_GET['colour'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Recurring?</label>
              <?php
              if($_GET['recurring'] == 1){
                echo '<input type="checkbox" name="recurring" class="form-control" checked>';
              }
              else {
                echo '<input type="checkbox" name="recurring" class="form-control">';
              }
              ?>


            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-user btn-block">Save Changes</button>
          </form>
        </div>

      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
