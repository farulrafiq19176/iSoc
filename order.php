<!DOCTYPE html>
<html>
<head>
	<title>iSoc - Order Management System</title>
	  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="order.css">
</head>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img src="Mcdonalds-95-logo.png">
        </a>
      </div>
      <!--/.nav-collapse -->
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="cartv2.php" class="navbar-brand" role="button" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span></a>
        </li>
      </ul>
    </div>
    </div>
  </nav>	

<div class="container">
  <form id="form">
    <div class="form-group">
      <label for="burger">Burger:</label>
      <select class="selectpicker col-sm-12" multiple="multiple" title="Choose you burger..">
          <option>Double Cheeseburger</option>
          <option>McChicken</option>
          <option>Big Mac</option>
        </select>
    </div>
    
    <div class="form-group">
      <label for="drinks">Drinks:</label>
      <select class="selectpicker col-sm-12" multiple="multiple" title="Choose your drink..">
        <option>100 plus</option>
        <option>Coca-cola</option>
        <option>Pepso</option>
      </select>
    </div>

    <button type="button" class="btn btn-primary center-block" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Successful!</h4>
        </div>
         <div class="modal-body">
        <p>Your order has been successfully submitted</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="location.href='cartv2.php'">Checkout my order</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Continue order</button>
      </div>
        </div>
      </div>
    </div>

  </form>
  
</div>




</body>
</html>