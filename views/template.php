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
        <script src="views/js/sweetalert2.all.js"></script>
</head>
<body class="app">
    <div class="container bg-light h-full rounded pt-0 p-5">
        <?php
            if(isset($_GET["page"])) {
                if($_GET["page"] == "card") {
                    include "modules/".$_GET["page"].".php";
                } else {
                    include "modules/404.php";
                }
            }else{
                include "modules/card.php";
            }
        ?>
    </div>

<script src="views/js/jquery.js"></script>
<script src="views/js/bootstrap.bundle.min.js"></script>
<script src="views/js/note.js"></script>
<script src="views/js/card.js"></script>
</body>
</html>