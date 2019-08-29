<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Event</title>
  <?php include_once("head.php"); ?>
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

<?php include_once("../scripts.php"); ?>

</body>
</html>
