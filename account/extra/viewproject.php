<?php
$sql = "SELECT * FROM projects INNER JOIN clients ON projects.ClientID = clients.ClientID WHERE projectid = $id";
$projects = mysqli_query($conn, $sql);
$project =  mysqli_fetch_array($projects);

$sql = "SELECT * FROM contracts WHERE projectid = $id";
$contracts = mysqli_query($conn, $sql);

// Contract button
// if(mysqli_num_rows($contracts) == 0){
//   echo '<a href="new.php?type=contract&id='.$id.'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Contract </a>';
// }
// else {
//   echo '<a href="view.php?type=contract&id='.$id.'" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pen-nib fa-sm text-white-50"></i> View Contract </a>';
// }
?>


<div class="form mx-0">
  <div class="form-panel">
    <div class="form-header">
      <h1>Edit Project</h1>
    </div>
    <div class="form-content">
      <form action="php/editproject.php" method="post">
        <div class="form-group">
          <label for="id">Project ID</label>
          <input type="text" id="id" name="id" readonly value="<?php echo sprintf('%04u', $_GET['id']) ?>" />
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" required="required" value="<?php echo $project['Title'] ?>"/>
        </div>
        <div class="form-group">
          <label for="lastname">Description</label>
          <textarea id="description" name="description" rows="3" cols="80"><?php echo $project['Description'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="startdate">Start Date</label>
          <input type="text" id="startdate" name="startdate" value="<?php echo date('d/m/Y', strToTime($project['StartDate'])) ?>" readonly/>
        </div>
        <div class="form-group">
          <label for="deadline">Deadline</label>
          <input type="date" id="deadline" name="deadline" value="<?php echo date('Y-m-d', strToTime($project['Deadline'])) ?>"/>
        </div>
        <div class="form-group">
          <label for="client">Client</label>
          <select id="client" name="client">
            <?php
            $currentid = $project['ClientID'];
            $sql = "SELECT * FROM clients WHERE clientid = '$currentid'";
            $currents = mysqli_query($conn, $sql);
            $current =  mysqli_fetch_array($currents);
            echo '<option value="'.$current['ClientID'].'">'.$current['FirstName'].' '.$current['LastName'].'</option>';

            $sql = "SELECT * FROM clients WHERE clientid != '$currentid'";
            $clients = mysqli_query($conn, $sql);
            while($client =  mysqli_fetch_array($clients)){
              echo '<option value="'.$client['ClientID'].'">'.$client['FirstName'].' '.$client['LastName'].'</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="fee">Fee</label>
          <input type="number" id="fee" name="fee" value="<?php echo $project['Fee'] ?>" min="0" step="0.01"/>
        </div>
        <div class="form-group">
          <button type="submit">Save Changes</button>
        </div>
        <div class="text-center">
          <a href="php/deleteproject.php?id=<?php echo $id ?>" class="mt-3 d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm text-white-50 mr-1"></i> Delete Project </a>
        </div>
      </form>
    </div>
  </div>
</div>
