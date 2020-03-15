<?php

    require 'config/cdn.php';

    if(
        !empty($_GET['customername']) && 
        !empty($_GET['transactionid']) && 
        !empty($_GET['product']) 
    ){
            $get = filter_var_array($_GET, FILTER_SANITIZE_STRING);
            // print_r($get);
            $customername = $get['customername'];
            $transactionid = $get['transactionid'];
            $product = $get['product'];

        } else {
            $customername = $transactionid = $product = '';
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $bootstrap; ?>" >
    <title>Successful Payment</title>
    <style>
        .transactionID{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h3>Thank You For Your Custom <?php echo htmlspecialchars($customername); ?>!</h3>
        <p class="transactionID">transaction id: <?php echo htmlspecialchars($transactionid); ?></p>
        <hr>
        <p><?php echo htmlspecialchars($product); ?></p>
        <hr>
        <p>Check your email for details!</p>
    </div>
    
</body>
</html>