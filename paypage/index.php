<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    </div>
<!-- the form that will be submitting to the charge.php page -->
    <form action="./charge.php" method="post" id="payment-form">
    <div class="form-row">
        <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
        </div>
        <!-- Used to display Element errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <button>Submit Payment</button>
  </form>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>

</body>
</html>