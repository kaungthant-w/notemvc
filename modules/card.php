<div class="bg-light my-5 m-auto w-full rounded py-3 px-5 ">
<div class="h2 mt-0 mt-sm-5">
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
                  <div class="card bg-secondary">
                      <div class="card-body text-white">
                          <h4 class="card-title"><?php echo $value["title"]; ?></h4>
                          <span class="card-subtitle d-block mb-2 text-sm"><?php echo date("d M Y", strtotime($value["created_at"])); ?></span>

                          <p class="card-text lh-lg"><?php echo substr($value["description"],0,60) ; ?> ... <span class="btnDetailCard" data-bs-toggle="modal" data-bs-target="#detail"><a href="#" class="text-decoration-none text-info"> Seemore</a></span> </p>
                          
                          <div class="mt-4 text-end">
                              <a href="#" class="card-link text-danger h4 btnDeleteCard" idCard="<?php echo $value['id']; ?>"><i class="fa-solid fa-trash"></i>
                              </a>

                              <a href="#" class="card-link text-warning me-2 h4 btnEditCard" idCard="<?php echo $value['id']; ?>"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i>
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
</div>

<?php require_once "addCard.php"; ?>
<?php require_once "editCard.php"; ?>
<?php require_once "detailCard.php"; ?>



<?php 
  $addCard = new CardController();
  $addCard->ctrlDeleteCard();
?>