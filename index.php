<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="app">
    <div class="container mt-0 mt-sm-5 p-3 bg-light h-full rounded">
        <div class="p-3 mt-2 h2">
            <a href="#" data-bs-toggle="modal" data-bs-target="#add"><i class="fa-solid fa-plus-circle text-success" title="Add Note"></i></a>
            Notes
        </div>
        <div class="my-5 ">
            <div class="row ml-3">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card bg-secondary" style="height:200px;">
                        <div class="card-body text-white">
                            <h4 class="card-title">Shopping
                            </h4>
                            <span class="card-subtitle d-block mb-2 text-sm">Mar 2 2022</span>

                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            
                            <div class="mb-3 float-end">
                              <a href="#" class="card-link text-danger h4"><span><i class="fa-solid fa-trash"></i></span>
                              </a>
                              
                              <a href="#" class="card-link text-warning h4" ><span><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit1"></i></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card bg-secondary" style="height:200px;">
                        <div class="card-body text-white">
                            <h4 class="card-title">Shopping
                            </h4>
                            <span class="card-subtitle d-block mb-2 text-sm">Mar 2 2022</span>

                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            
                            <div class="mb-3 float-end">
                              <a href="#" class="card-link text-danger h4"><span><i class="fa-solid fa-trash"></i></span>
                              </a>
                              
                              <a href="#" class="card-link text-warning h4" ><span><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit1"></i></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card bg-secondary" style="height:200px;">
                        <div class="card-body text-white">
                            <h4 class="card-title">Shopping
                            </h4>
                            <span class="card-subtitle d-block mb-2 text-sm">Mar 2 2022</span>

                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            
                            <div class="mb-3 float-end">
                              <a href="#" class="card-link text-danger h4"><span><i class="fa-solid fa-trash"></i></span>
                              </a>
                              
                              <a href="#" class="card-link text-warning h4" ><span><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit1"></i></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/note.js"></script>
</body>
</html>


<!-- add  -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"  cols="30" rows="10" required></textarea>
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
