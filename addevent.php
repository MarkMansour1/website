<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Event</title>
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
    else if($error == "emptyevent"){
      echo '<h4 style="color: red">Please select an event</h4>';
    }
    else if($error == "sqlerror"){
      echo '<h4 style="color: red">SQL Error</h4>';
    }
  }

  $userid = $_SESSION['UserID'];

  $sql = "SELECT * FROM events WHERE userid = $userid AND repeated = 0";
  $result = mysqli_query($conn, $sql);

  $events = array();
  $num = 0;
  while($row = mysqli_fetch_array($result)){
    $events[$num]['EventID'] = $row['EventID'];
    $events[$num]['Name'] = $row['Name'];
    $events[$num]['Colour'] = $row['Colour'];
    $events[$num]['Week'] = $row['Week'];
    $events[$num]['Day'] = $row['Day'];
    $events[$num]['Time'] = $row['Time'];
    $events[$num]['Recurring'] = $row['Recurring'];
    $num++;
  }
  ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0 text-center">

        <h1 class="h1 text-gray-900" style="padding: 3rem 0 1rem" id="title">Add Existing Event</h1>
        <button class="btn btn-secondary btn-user" onclick="toggleEvent()" id="btn">Add New Event</button>

        <div class="p-5" id="existing">
          <form class="user" action="php/addexistingevent.php" method="post">
            <input type="hidden" name="week" value="<?php echo $_GET['week'] ?>">
            <input type="hidden" name="day" value="<?php echo $_GET['day'] ?>">
            <input type="hidden" name="time" value="<?php echo $_GET['time'] ?>">
            <input type="hidden" name="repeated" value="1">
            <div class="form-group">
              <select name="id" class="form-control">
                <option selected="selected" disabled hidden value="">Choose Event</option>
                <?php
                for($i = 0; $i < count($events); $i++){
                  echo '<option value="'.$events[$i]['EventID'].'" style="font-size: 20px; background-color: '.$events[$i]['Colour'].'">'.$events[$i]['Name'].'</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Recurring?</label>
              <input type="checkbox" name="recurring" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-user btn-block">Add Event</button>
          </form>
        </div>

        <div class="p-5" id="new" style="display: none">
          <form class="user" action="php/addnewevent.php" method="post">
            <input type="hidden" name="week" value="<?php echo $_GET['week'] ?>">
            <input type="hidden" name="day" value="<?php echo $_GET['day'] ?>">
            <input type="hidden" name="time" value="<?php echo $_GET['time'] ?>">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label>Colour</label>
              <input type="color" name="colour" value="#7f7f7f" class="form-control">
            </div>
            <div class="form-group">
              <label>Recurring?</label>
              <input type="checkbox" name="recurring" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-user btn-block">Add Event</button>
          </form>

        </div>

        <script>
        function toggleEvent() {
          var existingForm = document.getElementById("existing");
          var newForm = document.getElementById("new");
          var title = document.getElementById("title");
          var btn = document.getElementById("btn");
          if (existingForm.style.display === "none") {
            existingForm.style.display = "block";
            newForm.style.display = "none";
            title.innerHTML = "Add Existing Event";
            btn.innerText = "Add New Event";
          }
          else {
            existingForm.style.display = "none";
            newForm.style.display = "block";
            title.innerHTML = "Add New Event";
            btn.innerText = "Add Existing Event";
          }
        }
        </script>

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
