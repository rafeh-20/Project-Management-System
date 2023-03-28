

<?php foreach($project as $pj) : ?>
<div id="pjEdit<?= $pj['id']?>" class="modal">
  <form action="index.php>" method="post" >
    <div class="modal-content">
        <h5 class="card teal center white-text">Edit Project</h5><br>
        
        <div class="input-field">
          <input id="id" type="text" name="id" value="<?= $bm['bid'] ?>" readonly>
          <label for="id">Project ID</label>
        </div>  
        <div class="input-field">
          <input id="title" type="text" name="title" value="<?= $pj['title'] ?>">
          <label for="title">Name</label>
        </div>
        <div class="input-field">
            <input id="des" type="text" name="des" value="<?= $pj['des'] ?>">
            <label for="des">Description</label>
        </div>
        <div class="input-field">
          <textarea id="req" class="materialize-textarea" name="req" ><?= $pj['req'] ?></textarea>
          <label for="req">Requirements</label>
        </div>
        <div class="input-field">
          <textarea id="software" class="materialize-textarea" name="software" ><?= $pj['software'] ?></textarea>
          <label for="software">Notes</label>
        </div>
        <div class="input-field">
          <textarea id="hardware" class="materialize-textarea" name="hardware" ><?= $pj['hardware'] ?></textarea>
          <label for="hardware">Hardware</label>
        </div>
      </div>
      
      <div class="modal-footer">
        <button  class="btn waves-effect waves-light" type="submit" name="edit">Update
         <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
</div>
<?php endforeach ?>

