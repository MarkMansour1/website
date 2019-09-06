<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Add Project</h1>
    </div>
    <div class="form-content">
      <form action="php/addproject.php" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" required="required"/>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" name="description" rows="2" cols="80"></textarea>
        </div>
        <div class="form-group">
          <label for="deadline">Deadline</label>
          <input type="date" id="deadline" name="deadline"/>
        </div>
        <div class="form-group">
          <label for="client">Client</label>
          <select id="client" name="client">
            <?php
            $sql = "SELECT * FROM clients";
            $clients = mysqli_query($conn, $sql);
            while($client =  mysqli_fetch_array($clients)){
              echo '<option value="'.$client['ClientID'].'">'.$client['FirstName'].' '.$client['LastName'].'</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <button type="submit">Add Project</button>
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Add Client</h1>
    </div>
    <div class="form-content">
      <form action="php/addclient.php" method="post">
        <input type="hidden" name="project" value="true"/>
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" required="required"/>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email"/>
        </div>
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" id="company" name="company"/>
        </div>
        <div class="form-group">
          <button type="submit">Add Client</button>
        </div>
      </form>
    </div>
  </div>
</div>
