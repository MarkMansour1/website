<?php
$sql = "SELECT * FROM users";
$users = mysqli_query($conn, $sql);
$mark =  mysqli_fetch_array($users);

$id = sprintf('%04u', $_GET['id']);
$sql = "SELECT * FROM projects INNER JOIN clients ON clients.clientid = projects.clientid WHERE projectid = '$id'";
$projects = mysqli_query($conn, $sql);
$project =  mysqli_fetch_array($projects);

$sql = "SELECT * FROM contracts WHERE contractid = 1";
$contracts = mysqli_query($conn, $sql);
$contract =  mysqli_fetch_array($contracts);
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-7 text-gray-900">
      <div class="container py-4 card border-dark rounded-0 text-gray-900">
        <!-- Page top details -->
        <div class="container my-3">
          <div class="row">
            <div class="col-md-6">
              <?php
              echo date('d/m/Y').'<br>
              '.$project['FirstName'].' '.$project['LastName'].'<br>
              '.$project['Company'].'<br>
              ';?>
            </div>
            <div class="col-md-6 text-right">
              <?php
              echo $mark['FirstName'].' '.$mark['LastName'].'<br>
              '.$mark['Phone'].'<br>
              '.$mark['Email'].'<br>
              ';?>
            </div>
          </div>
        </div>
        <!-- Title -->
        <div class="container text-center my-3">
          <h1 class="h5"><strong>Confirmation of Engagement</strong></h1>
          <span>Project <?php echo $id ?></span>
        </div>
        <!-- Details -->
        <div class="container">
          <p>
            <strong>Project Title/Description: </strong><?php echo $project['Title'] ?><br>
            <?php echo $project['Description'] ?>
          </p>
          <p>
            <strong>Deadline: </strong><?php echo $project['Deadline'] ?><br>
          </p>
          <p>
            <strong>Copyright Usage: </strong><span id="precopy"><?php echo $contract['Copyright'] ?></span><br>
          </p>
          <p>
            <strong>Fee: </strong>£<?php echo $project['Fee'] ?>
          </p>
        </div>
        <div class="container">
          <h1 class="h5 my-3"><strong>Terms:</strong></h1>
          <p>
            <strong>Reservation of Rights: </strong><span id="preres"><?php echo $contract['Reservation'] ?></span><br>
            <strong>Revisions: </strong><span id="prerev"><?php echo $contract['Revisions'] ?></span><br>
            <strong>Payment Schedule: </strong><span id="prepays"><?php echo $contract['PaySchedule'] ?></span><br>
            <strong>Payment Terms: </strong><span id="prepayt"><?php echo $contract['PayTerms'] ?></span><br>
            <strong>Cancellation Fees: </strong><span id="precanc"><?php echo $contract['Cancellation'] ?></span><br>
            <strong>Credits and Promotion: </strong><span id="precred"><?php echo $contract['Credits'] ?></span><br>
            <strong>Preliminary Works: </strong><span id="prepre"><?php echo $contract['Preliminary'] ?></span><br>
            <strong>Permissions and Releases: </strong><span id="preperm"><?php echo $contract['Permissions'] ?></span><br>
            <strong>Miscellaneous: </strong><span id="premisc"><?php echo $contract['Misc'] ?></span><br>
          </p>
          <p><strong>This Agreement must be signed and returned before Designer can begin this job.</strong></p>
        </div>
        <!-- Signatures -->
        <div class="container">
          <div class="row">
            <div class="col-6">
              <p>Designer Signature </p>
            </div>
            <div class="col-6">
              <p>Date </p>
            </div>
          </div>
          <br>
          <hr class="border-dark">
          <!-- Client signature -->
          <div class="row">
            <div class="col-6">
              <p>Client Signature </p>
            </div>
            <div class="col-6">
              <p>Date </p>
            </div>
          </div>
          <br>
          <hr class="border-dark">
        </div>
      </div>
      <!-- End preview -->
      <div class="form-group my-5">
        <button type="submit" form="contractForm">Create Contract</button>
      </div>
    </div>
    <div class="col-xl-5">
      <div class="form">
        <div class="form-panel">
          <div class="form-header">
            <h1>Edit Contract</h1>
          </div>
          <div class="form-content">
            <form action="php/addcontract.php" method="post" id="contractForm">
              <input type="number" name="id" value="<?php echo $_GET['id'] ?>" hidden>
              <div class="form-group">
                <label for="title">Copyright Usage</label>
                <textarea id="copy" name="copyright" rows="5" cols="80" ><?php echo $contract['Copyright'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Reservation of Rights</label>
                <textarea id="res" name="reservation" rows="4" cols="80" ><?php echo $contract['Reservation'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Revisions</label>
                <textarea id="rev" name="revisions" rows="4" cols="80" ><?php echo $contract['Revisions'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Payment Schedule</label>
                <textarea id="pays" name="payschedule" rows="2" cols="80" ><?php echo $contract['PaySchedule'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Payment Terms</label>
                <textarea id="payt" name="payterms" rows="4" cols="80" ><?php echo $contract['PayTerms'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Cancellation Fees</label>
                <textarea id="canc" name="cancellation" rows="7" cols="80" ><?php echo $contract['Cancellation'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Credits and Promotion</label>
                <textarea id="cred" name="credits" rows="3" cols="80" ><?php echo $contract['Credits'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Preliminary Works</label>
                <textarea id="pre" name="preliminary" rows="5" cols="80" ><?php echo $contract['Preliminary'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Permissions and Releases</label>
                <textarea id="perm" name="permissions" rows="7" cols="80" ><?php echo $contract['Permissions'] ?></textarea>
              </div>
              <div class="form-group">
                <label for="title">Miscellaneous</label>
                <textarea id="misc" name="misc" rows="8" cols="80" ><?php echo $contract['Misc'] ?></textarea>
              </div>
              <div class="form-group">
                <button type="button"><a onclick="previewContract()" href="#" class="nav-link text-white p-0">Preview Contract</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
function previewContract() {
  document.getElementById('precopy').innerHTML = document.getElementById("copy").value;
  document.getElementById('preres').innerHTML = document.getElementById("res").value;
  document.getElementById('prerev').innerHTML = document.getElementById("rev").value;
  document.getElementById('prepays').innerHTML = document.getElementById("pays").value;
  document.getElementById('prepayt').innerHTML = document.getElementById("payt").value;
  document.getElementById('precanc').innerHTML = document.getElementById("canc").value;
  document.getElementById('precred').innerHTML = document.getElementById("cred").value;
  document.getElementById('prepre').innerHTML = document.getElementById("pre").value;
  document.getElementById('preperm').innerHTML = document.getElementById("perm").value;
  document.getElementById('premisc').innerHTML = document.getElementById("misc").value;
}
</script>
