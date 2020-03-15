<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
<div class="container">
<h2 class="my-4 text-center">React Course ($25)</h2>
    <form action="charge.php" method="POST" id="payment-form">
        <div class="form-row">
            <div id="card-element" class="form-control">
                <!-- Stripe element will go here -->
            </div>

            <div id="form-errors">
                <!-- Display card errors -->
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Submit Payment</button>
    </form>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>