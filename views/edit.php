<?php
require "config.php";
if($_POST) {
    $title = $_POST["title"];
    $desc = $_POST["description"];
    $id = $_POST["id"];

    $pdoStmt = $pdo->prepare("UPDATE note SET title='$title',description='$desc' WHERE id='$id'");
    $result = $pdoStmt -> execute();
    // print_r($result);

    if($result) {
        echo "<script>alert('Note is Updated');window.location.href='index.php';</script>";
    }

} else {
    $pdoStmt = $pdo->prepare("SELECT * FROM note WHERE id=".$_GET["id"]);
    $pdoStmt->execute();
    $result = $pdoStmt->fetchAll();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="app">
    <div class="container my-md-5 p-3 bg-light rounded col-md-5">
        <h2 class="p-3 mt-2">
            Update Note
        </h2>
        <div class="my-5">
            <div class="row ml-3">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $result[0]["id"]; ?>">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $result[0]["title"]; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="6" required>
                            <?php 
                                echo $result[0]["description"]; 
                            ?>
                        </textarea>
                    </div>

                    <div class="modal-footer">
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>   
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>