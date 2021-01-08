<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">

    <title>Animal King</title>
</head>
<body>
    <header>
        <img class="company-logo" src="assets/catPlay.png" alt="">
        <h1>Animal King <img class="title-icon" src="assets/paws.png" alt=""></h1>
    </header>
    <br>
    <hr>

    <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    ?>

    <div class="navbar">
        <p>Tigers</p>
        <p>Wolfs</p>
        <p>Capybara's</p>
        <p>Condors</p>
        <p>Sharks</p>
    </div>

    <?php
    pre_r($_POST);
        if (isset($_POST['submit'])) {
            echo $_POST;
        }
    ?>

    <div class="container">
        <form action="" id="products" method="POST">

            <div class="row">
                <div class="col mt-40 mb-30">

                    <div class="product-box cat-toys">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/catnipToy.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" name="Kitty Catnip">Kitty Catnip</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
                                <input class="btn btn-outline-info" type="submit" value="submit">
                                <p>€ <span>3.75</span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col mt-40 mb-30">
                    <div class="product-box dog-toys">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/Doggo Bone.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Doggo Bone</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
                                <input class="btn btn-outline-info" type="submit" value="Select !">
                                <p>€ <span>6.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-40 mb-30">
                    <div class="product-box rodent-toys">
                        <div class="card" style="width: 18rem; ">
                            <img src="assets/hamster ball.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rolling Stone</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
                                <input class="btn btn-outline-info" type="submit" value="Select !">
                                <p>€ <span>12.30</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-40 mb-30">
                    <div class="product-box bird-toys">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/flappy bird.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Flappy bored</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
                                <input class="btn btn-outline-info" type="submit" value="Select !">
                                <p>€ <span>7.90</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-40 mb-30">
                    <div class="product-box fish-toys">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/fish toy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">It's-a-rock</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
                                <input class="btn btn-outline-info" type="submit" value="Select !">
                                <p>€ <span>33.60</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
</html>

<?php

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>