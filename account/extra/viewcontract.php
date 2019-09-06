<?php
$sql = "SELECT * FROM users";
$users = mysqli_query($conn, $sql);
$mark =  mysqli_fetch_array($users);

$sql = "SELECT * FROM contracts
INNER JOIN projects ON contracts.ProjectID = projects.ProjectID
INNER JOIN clients ON projects.ClientID = clients.ClientID
WHERE contracts.ProjectID = $id";

$contracts = mysqli_query($conn, $sql);
$contract =  mysqli_fetch_array($contracts);
?>

<!-- Begin contract -->
<div class="container py-5 card border-dark rounded-0 text-gray-900">
  <!-- Page top details -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="h5"><?php echo date('d/m/Y', strtotime($contract['Date'])) ?></h1>
        <h1 class="h5"><?php echo $contract['FirstName'].' '.$contract['LastName'] ?></h1>
        <h1 class="h5"><?php echo $contract['Company'] ?></h1>
      </div>
      <div class="col-md-6 text-right">
        <h1 class="h5"><?php echo $mark['FirstName'].' '.$mark['LastName'] ?></h1>
        <h1 class="h5"><?php echo $mark['Phone'] ?></h1>
        <h1 class="h5"><?php echo $mark['Email'] ?></h1>
      </div>
    </div>
  </div>
  <!-- Title and project # -->
  <div class="container text-center mt-5">
    <h1 class="h3"><strong>Confirmation of Engagement</strong></h1>
    <h1 class="h4"><?php echo $title ?></h1>
  </div>
  <!-- Details -->
  <div class="container pt-3 my-3">
    <h1 class="h5 pb-1"><strong>Project Title/Description:</strong> <?php echo $contract['Title'].'<br>'.$contract['Description'] ?></h1>
    <h1 class="h5 pb-1"><strong>Deadline:</strong> <?php echo date('d/m/Y', strtotime($contract['Deadline'])) ?></h1>
    <h1 class="h5 pb-1"><strong>Copyright Usage:</strong> <?php echo $contract['Copyright'] ?></h1>
    <h1 class="h5 pb-1"><strong>Fee:</strong> <?php echo '£'.$contract['Fee'] ?></h1>
  </div>
  <!-- Terms -->
  <div class="container">
    <h1 class="h4 pb-3"><strong>Terms:</strong></h1>
    <h1 class="h5"><strong>1.	Reservation of Rights:</strong> <?php echo $contract['Reservation'] ?></h1>
    <h1 class="h5"><strong>2.	Revisions:</strong> <?php echo $contract['Revisions'] ?></h1>
    <h1 class="h5"><strong>3.	Payment Schedule:</strong> <?php echo $contract['PaySchedule'] ?></h1>
    <h1 class="h5"><strong>4.	Payment Terms:</strong> <?php echo $contract['PayTerms'] ?></h1>
    <h1 class="h5"><strong>5.	Cancellation Fees:</strong> <?php echo $contract['Cancellation'] ?></h1>
    <h1 class="h5"><strong>6.	Credits and Promotion:</strong> <?php echo $contract['Credits'] ?></h1>
    <h1 class="h5"><strong>7.	Preliminary Works:</strong> <?php echo $contract['Preliminary'] ?></h1>
    <h1 class="h5"><strong>8.	Permissions and Releases:</strong> <?php echo $contract['Permissions'] ?></h1>
    <h1 class="h5"><strong>9.	Miscellaneous:</strong> <?php echo $contract['Misc'] ?></h1>
    <br>
    <h1 class="h5"><strong>This Agreement must be signed and returned before Designer can begin this job.</strong></h1>
    <br>
    <!-- Designer signature -->
    <div class="row">
      <div class="col-6">
        <h1 class="h5">Designer Signature </h1>
      </div>
      <div class="col-6">
        <h1 class="h5">Date </h1>
      </div>

    </div>
    <br>
    <hr class="border-dark">
    <!-- Client signature -->
    <div class="row">
      <div class="col-6">
        <h1 class="h5">Client Signature </h1>
      </div>
      <div class="col-6">
        <h1 class="h5">Date </h1>
      </div>
    </div>
    <br>
    <hr class="border-dark">
  </div>
</div>
<!-- End contract -->
