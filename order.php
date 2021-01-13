<?php // This files is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">

    <title>Order now!</title>
</head>
<body>

    <header>
        <img class="company-logo" src="assets/catPlay.png" alt="">
        <h1>Animal King <img class="title-icon" src="assets/paws.png" alt=""></h1>
    </header>
    <br>
    <hr>
    <div class="navbar">
        <p>Tigers</p>
        <p>Wolfs</p>
        <p>Capybara's</p>
        <p>Condors</p>
        <p>Sharks</p>
    </div>

    <div class="container">
        <h1>Place your order</h1>
        <?php // Navigation for when you need it ?>
        <?php 
            pre_r($_POST);
            //TODO: Analyse If all inputs are true: correct
            $formCorrect = true;
            foreach ($_POST as $key => $input) {

                if ($input == "") {
                    $formCorrect = false;
                }
            }
            
            //TODO: If false: Error message
            if ($formCorrect == false) {
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Look Again!</h4>
                <p>Aww... It seems you don\'t love your pets! please fill in all the required info!</p>
                <hr>
                <p class="mb-0">Be quick about it!!.</p>
                </div>';
                
            }
            //TODO: If true: Succes message
            if ($formCorrect == true) {
                echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4><br>
                <p>Are you sure that you only want to buy that?? I would buy more, you know... I love my pets</p><br><br>
                <p>Please make sure that your information is correct:</p><br>';
                echo adress();
                echo '<p>Check if this is all you selected!</p><hr>';
                echo bucketList($products);
                echo '</div>';
            }

            function adress() {
                foreach ($_POST as $key => $value) {
                    if ($key === 'street') {
                        echo $value . ' ';
                    }
                    else if ($key === 'streetnumber') {
                        echo $value . ', ';
                    }
                    else if ($key === 'city') {
                        echo $value . ' ';
                    }
                    else if ($key === 'zipcode') {
                        echo $value . ' ';
                    }
                }
            }

            function bucketList($item) {
                $array = $_POST['products'];

                foreach ($array as $index => $value) {
                    echo '<p class="mb-0" >';
                    print_r($item[$index]['name']);
                    echo '</p><br>';
                }
            }
            

            $orderTotal = productprices($products);
            function productprices($item) {
                $array = $_POST['products'];
                $singleOrder = "";

                foreach ($array as $index => $value) {
                    print_r($item[$index]['price']);
                    return $singleOrder;
                }

            }
            $totalValue += "$singleOrder";
            

            $_SESSION['street'] = $_POST['street'];

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                
                
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    echo '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Look Again!</h4>
                    <p>Aww... It seems you don\'t love your pets! please fill in all the required info!</p>
                    <hr>
                    <p class="mb-0">Be quick about it!!.</p>
                    </div>';
                }
            }

        ?>

        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                    <span class="error">* <?php echo $emailErr;?></span>
                </div>
                <div></div>
            </div>

            <fieldset>
                <legend>Address</legend>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="street">Street:</label>
                        <input type="text" name="street" id="street" class="form-control" value="<?php echo isset($_POST['street']) ? $_POST['street'] : '' ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="streetnumber">Street number:</label>
                        <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?php echo isset($_POST['streetnumber']) ? $_POST['streetnumber'] : '' ?>" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" class="form-control" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zipcode">Zipcode</label>
                        <input type="number" id="zipcode" name="zipcode" class="form-control" value="<?php echo isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Products</legend>

                <div class="container">
                <div class="row">
                <div class="col mt-40 mb-30">

                    <div class="product-box cat-toys">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/catnipToy.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" name="Kitty Catnip">Kitty Catnip</h5>
                                <p class="card-text">Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff. Please buy my stuff.</p>
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
                                <p>€ <span>33.60</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <?php foreach ($products as $i => $product): ?>
                    <label>
                        <?php // <?p= is equal to <?php echo ?>
                        <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product->name ?> -
                        &euro; <?= number_format($product->price, 2) ?>
                    </label><br />
                <?php endforeach; ?>
            </fieldset>

            <button type="submit" class="btn btn-primary">Order!</button>
        </form>

        <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in toys for your pet(s).</footer>
    </div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>

<?php

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>