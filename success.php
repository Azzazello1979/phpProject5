<?php

    if(
        !empty($_GET['customername']) && 
        !empty($_GET['transactionid']) && 
        !empty($_GET['product']) && 
        !empty($_GET['description'])
    ){
            $get = filter_var_array($_GET, FILTER_SANITIZE_STRING);
            print_r($get);
            $customername = $get['customername'];
            $transactionid = $get['transactionid'];
            $product = $get['product'];
            $description = $get['description'];

        } else {
            $customername = $transactionid = $product = $description = '';
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Payment</title>
    <style>
        .product{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <h3>Thank You For Your Custom <?php echo htmlspecialchars($customername); ?>!</h3>
    <p>transaction id: <?php echo htmlspecialchars($transactionid); ?></p>
    <hr>
    <p class="product"><?php echo htmlspecialchars($product); ?></p>
    <p><?php echo htmlspecialchars($description); ?></p>
</body>
</html>