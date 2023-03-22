<?php include "./logic.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
</head>
<body>
    <h1>Pirkinių sąrašas</h1>
    <form action="" method="post">
        <input type="text" name="Item">
        <input type="text" name="Category">
        <button class="btn btn-primary" id="btn" type="submit">Buy</button>

    </form>

    <table class="table table-striped">
        <tr>
            <th>Item</th>
            <th>Category</th>
        </tr>
        <?php for ($i=0; $i < count($_SESSION['shop']); $i++) { ?>
            <tr>
                <td><?=$_SESSION['shop'][$i]["item"]?></td>
                <td><?=$_SESSION['shop'][$i]["category"]?></td>
            </tr>
       <?php } ?>
    </table>
    
</body>
</html>