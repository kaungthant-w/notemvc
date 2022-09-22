<div class="p-3 h2 mt-0 mt-sm-5 p-3">
    <a href="#" data-bs-toggle="modal" data-bs-target="#add"><i class="fa-solid fa-plus-circle text-success" title="Add Note"></i></a>
    Notes
</div>

<?php
  $item = null;
  $value = null;
  $card = CardController::ctrlShowCard($item, $value);
  // var_dump($card);
?>

<div class="my-3">
    <div class="row ml-3">
      
        <?php
          if($card) {
            foreach($card as $key=>$value) { ?>

              <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card bg-secondary" style="height:200px;">
                      <div class="card-body text-white">
                          <h4 class="card-title"><?php echo $value["title"]; ?></h4>
                          <span class="card-subtitle d-block mb-2 text-sm"><?php echo date("d M Y", strtotime($value["created_at"])) ; ?></span>

                          <p class="card-text"><?php echo $value["description"]; ?></p>
                          
                          <div class="mt-3 text-end">
                              <a href="#" class="card-link text-danger h4"><span><i class="fa-solid fa-trash"></i> </span>
                              </a>

                              <a href="#" class="card-link text-warning h4 btnEditCard" idCard="<?php echo $value['id']; ?>"><span><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></span>
                              </a>
                          </div>

                      </div>
                  </div>
                </div>
              <?php  
            }
          }
        ?>
    </div>
</div>


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

<!-- edit  -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" method="POST">
        <input type="hidden" name="idCard" id="idCard">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="editTitle" id="editTitle" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="editDescription" id="editDescription"  cols="30" rows="10" required></textarea>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Save">
            </div>
       </form>
      </div>
      
    </div>
  </div>
</div>

<?php 
  $addCard = new CardController();
  $addCard->ctrlEditCard();
?>