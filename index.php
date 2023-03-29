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
        <div class="bgImage">

            <h1 class="center">Shopping List</h1>

            <div class="row">
                <div class="col"></div>
                <div class="col">

                    <form class="form-inline" action="" method="post">
                        <label for=""></label>
                        <input type="textitem" id="item" placeholder=" Add item" name="Item">
                        <label for=""></label>
                        <input type="textcategory" id="category" placeholder="Add category" name="Category">
                        <button class="btn " id="btn" type="submit">Add to the list</button>
                    </form>

                </div>
                <div class="col"></div>
            </div>






            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 shade">

                    <table class="table">
                        <thead>

                            <tr>
                                <th scope="">Item</th>
                                <th scope="">Category</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php for ($i = 0; $i < count($_SESSION['shop']); $i++) { ?>
                                <tr>
                                    <td ><?= $_SESSION['shop'][$i]["item"] ?></td>
                                    <td><?= $_SESSION['shop'][$i]["category"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>

</html>