<?php
$sql = "SELECT * FROM projects INNER JOIN clients ON projects.ClientID = clients.ClientID WHERE projectid = $id";
$projects = mysqli_query($conn, $sql);
$project =  mysqli_fetch_array($projects);

$sql = "SELECT * FROM contracts WHERE projectid = $id";
$contracts = mysqli_query($conn, $sql);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h4 mb-0 text-gray-800">Title: <?php echo $project['Title']; ?></h1>
  <h1 class="h5 mb-0 text-gray-800">Deadline: <?php echo date('d-m-Y', strtotime($project['Deadline'])); ?></h1>

  <?php
  if(mysqli_num_rows($contracts) == 0){
    echo '<a href="new.php?type=contract&id='.$id.'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Contract </a>';
  }
  else {
    echo '<a href="view.php?type=contract&id='.$id.'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pen-nib fa-sm text-white-50"></i> View Contract </a>';
  }
  ?>
</div>

<h1 class="h5 mb-0 text-gray-800 w-25">Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
