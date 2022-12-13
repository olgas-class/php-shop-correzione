<?php
require_once __DIR__ . "/Database/database.php";
require_once __DIR__ . "/Models/Customer.php";
require_once __DIR__ . "/Models/ShoppingBasket.php";
require_once __DIR__ . "/Models/CreditCard.php";

$guest = new Customer("Olga", "olga@gmail.com");
$guest->basket = new ShoppingBasket();
$guest->basket->add($crochette);
$guest->basket->add($topo);
$total = $guest->basket->getTotal();
var_dump($total);

// // Procediamo al pagamento
$guest->insertCreditCard(new CreditCard("123124123123", "234", "12", "2022"));
var_dump($guest);
$result = $guest->pay($total);
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row row-cols-4">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name ?></h5>
                            <p class="card-text">€ <?php echo $product->price ?></p>
                            <p class="card-text"><?php echo $product->getDetails() ?></p>
                            <?php if (get_class($product) === "Toy") { ?>
                                <p class="card-text"><?php echo $product->material ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>