<div id="add_form" class="modal">
  <form action="index.php" method="post" >
    <div class="modal-content">
        <h5 class="card-panel teal center white-text">New Project</h5><br>
        <div class="input-field">
          <input id="title" type="text" name="title">
          <label for="title">Name</label>
          </div>
          <div class="input-field">
          <textarea id="des" class="materialize-textarea" name="des"></textarea>
          <label for="des">Description</label>
          </div>
          <div class="input-field">
          <textarea id="req" class="materialize-textarea" name="req"></textarea>
          <label for="req">Requirements</label>
          </div>
          <div class="input-field">
          <textarea id="software" class="materialize-textarea" name="software"></textarea>
          <label for="software">Software</label>
          </div>
          <div class="input-field">
          <textarea id="hardware" class="materialize-textarea" name="hardware"></textarea>
          <label for="hardware">Hardware</label>
        </div>
      </div>
      <div class="modal-footer">
        <button  class="btn waves-effect waves-light" type="submit" name="insert">Add
         <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
</div>