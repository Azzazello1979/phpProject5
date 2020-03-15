<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Pay Page</title>
</head>
<body>
    <form action="/charge" method="POST" id="payment-form">
        <div class="form-row">
            <label for="card-element">Credit or Debit card</label>
            <div id="card-element">
                <!-- Stripe element will go here -->
            </div>

            <div id="form-errors">
                <!-- Display card errors -->
            </div>
        </div>
        <button type="submit">Submit Payment</button>
    </form>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>