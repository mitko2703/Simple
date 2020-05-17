<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<?php include "./header.php" ?>

<div class="container mt-5">
    <div class="jumbotron pt-5 text-dark">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="https://images7.alphacoders.com/389/thumb-1920-389345.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12">
                <h5>Pancake with butter</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio libero cumque maxime error 
                    autem a iusto. Sint quam illum consectetur, soluta omnis repellendus, cumque, reiciendis 
                    distinctio unde quis fugit vitae?
                </p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Quantity</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Addons</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>None</option>
                        <option value="1">Bannas</option>
                        <option value="2">Chocolate</option>
                        <option value="3">Wallnuts</option>
                    </select>
                </div>
                <button class="btn btn-info btn-lg float-right">Add to cart</button>
            </div>
        </div>
    </div> 
</div>
    <?php include "./footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>