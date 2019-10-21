<?php
    $sum = 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])){
            if(isset($_POST['countAdult']) && isset($_POST['countChild']) && isset($_POST['countDays']) && isset($_POST['basePrice'])){    $countAdult = $_POST['countAdult'];
                $countChild = $_POST['countChild'];
                $countDays = $_POST['countDays'];
                $basePrice = $_POST['basePrice'];
                $sum = ($countAdult + ($countChild*0.5)) * $countDays * $basePrice;
            } else {
                $sum = "Получены не все значения";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php include("components/header.php") ?>

    <?php include("components/cards.php") ?>

    <?php include("components/text.php") ?>

    <?php include("components/form.php") ?>

    <?php include("components/contacts.php") ?>

    <?php include("components/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>