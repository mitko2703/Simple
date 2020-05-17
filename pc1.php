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