<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #A7C4BC;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5 ">
                  <h2 style="font-family: 'Sacramento', cursive;">Welcome to</h2>
                  <h1 style="font-family: 'Sacramento', cursive; font-weight: bolder;">THE SPARKS FOUNDATION BANK </h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid" style="margin: 5%;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #A7C4BC; color:#03256C; font-weight:bolder; font-family: 'Sacramento', cursive;">New User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans.jpg" class="img-fluid" style="margin: 5%;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #A7C4BC; color:#03256C; font-weight:bolder; font-family: 'Sacramento', cursive;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.jpg" class="img-fluid" style="margin: 5%;>
                    <br>
                    <a href=""><button style="background-color : #A7C4BC; color:#03256C; font-weight:bolder; font-family: 'Sacramento', cursive;">Transaction History</button></a>
                  </div>
            </div>
              <footer id="footer" class="coloured-section">
                 <p style="font-family: fantasy; position: relative; text-align: center; left: 0; bottom: 0; top: 90px; background-color: yellow; color: black; overflow: hidden; width= 100%;">Copyright @2022 Made By: Vaishnavi Salunkhe. <br>A PROJECT FOR SPARKS FOUNDATION. </p>
              </footer>
            </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
<!-- transfermoney.php
transactionhistory.php -->