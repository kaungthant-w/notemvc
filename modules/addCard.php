<!-- add  -->
<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="addTitle" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="addDescription"  cols="30" rows="10" required></textarea>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add">
            </div>
       </form>
      </div>
      
    </div>
  </div>
</div>

<?php 
  $addCard = new CardController();
  $addCard->ctrlCreateCard();
?>
