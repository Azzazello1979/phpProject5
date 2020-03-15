<?php

    require_once('vendor/autoload.php'); // stripe SDK for PHP require
    \Stripe\Stripe::setApiKey('sk_test_ybUpKsd02p6CQK1itSQlYMAd00lntI6LgS'); // must be secret key not publishable key
    
    // sanitize post array
    $post = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $first_name = $post['first_name'];
    $last_name = $post['last_name'];
    $email = $post['email'];
    $stripeToken = $post['stripeToken'];

    //echo $stripeToken;

    // create customer in Stripe
    $customerResponse = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $stripeToken,
        "name" => $first_name . ' ' . $last_name
    ));

    //var_dump($customerResponse);

    // charge customer
    $chargeResponse = \Stripe\Charge::create([
        "amount" => 5000,
        "currency" => "usd",
        "description" => "React Course",
        "customer" => $customerResponse['id']
    ]);

    // print_r($chargeResponse);


?>