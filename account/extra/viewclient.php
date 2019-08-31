<?php
$sql = "SELECT * FROM clients WHERE clientid = $id";
$clients = mysqli_query($conn, $sql);
$client =  mysqli_fetch_array($clients);
?>

<div class="form">
  <div class="form-panel">
    <div class="form-header">
      <h1>Edit Client</h1>
    </div>
    <div class="form-content">
      <form action="php/editclient.php" method="post">
        <div class="form-group">
          <label for="id">Client ID</label>
          <input type="text" id="id" name="id" readonly value="<?php echo sprintf('%04u', $_GET['id']) ?>" />
        </div>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" required="required" value="<?php echo $client['FirstName'] ?>"/>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" value="<?php echo $client['LastName'] ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" value="<?php echo $client['Phone'] ?>"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $client['Email'] ?>"/>
        </div>
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" id="company" name="company" value="<?php echo $client['Company'] ?>"/>
        </div>
        <div class="form-group">
          <button type="submit">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
