<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style1.css">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }
    a:link {
      color: white;
    }
    a:hover {
      color: white;
      text-decoration: none;
    }
    h5 {
      color:#cc0e74;
    }
  </style>
</head>
<body>
  <nav>
    <div class="container-fluid nav-wrapper #f48fb1 pink lighten-3">
      <a href="index1.php" class="brand-logo"><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" style="height:70px;width:60px" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index1.php">Home</a></li>
        <li><a href="./php/transfermoney.php">View Customers</a></li>
        <li><a href="./php/transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>
  <!--heading / title -->
  <div class="center head mt-0">
    <h2><b>TSF BANK</b></h2>
  </div>
  <!---3 col start-->
  <div class="row center sect">
    <!--end of card 1-->
    <!--second col-->
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./images/bank.jpg">
            </div>
            <button onclick="location.href='./php/transfermoney.php'" style="color:black" class="waves-effect waves-light #ec407a pink lighten-1 btn-large"><b>Perform Transactions</b><i class="material-icons right">add_circle</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 2-->
    <div class="col s4">
      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img src="./images/welcome.png">
            </div>
            <br />
            <h5><b>Welcome to TSF Bank !</b></h5>
            <br />
            
          </div>
        </div>
      </div>
    </div>
    <!--middle-->
    <div class="col s4">
      <!-- Promo Content 3 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./images/transactionhistory.jpg">
            </div>
            <button type="button" onclick="location.href='./php/transactionhistory.php'" style="color:black" class="waves-effect waves-light #ec407a pink lighten-1 btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->
  </div>
  <!--sectio-->
  <footer class="center footer">
    <h6 class="info"><b>2021 © Made by Sania Tuscano</b></h6>
    The Sparks Foundation
  </footer>
  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>