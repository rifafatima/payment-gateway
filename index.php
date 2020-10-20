
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Food For All</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&family=Prata&family=Sanchez&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-fixed-top navbar-expand-lg" style="background-color:#FADBD8 ;">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="background-color:#112E42;" ></span>
        <span class="icon-bar" style="background-color:#112E42 ;" ></span>
        <span class="icon-bar" style="background-color:#112E42 ;" ></span>
      </button>
      <a class="navbar-brand" href="#">
        <img id="logo" src="images/logo4.jpg" style="width:70%; height: 45px; opacity: 1;margin-bottom:1%;" alt="">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="background-color:#FADBD8 ;">

      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#payment-box">Donate</a></li>
        <li><a href="#textban">About</a></li>

      </ul>
    </div>
</nav>


<div class = "container">
  <div class="row">
  <section id="part1" class="col-md-11 col-md-push-1 col-xs-12">
<img src="images/bg.jpg" id="imgbg" alt="background" >
</section>
</div>
</div>



<div class = "container">
  <div class="row">
  <section class="col-md-12 col-xs-12">
    <p id="welcometext">DONATE TO PROVIDE FOOD FOR ALL</p>
</section>
</div>
</div>


 <div class = "container banner" id="about">
   <div class="row justify-content-center">
     <div class="col-md-3 col-xs-11">
          <img id="imgban" src="images/help2.png" height="110%" width="110%" style="padding-top:25%;">
      </div>
       <div class="col-md-9 col-xs-12 ">
           <p id="textban" > Food for all is a non-profit organization which works to provide food to malnourished children.</p>
          </div>
  </div>
</div>



 <div class = "container" style="margin: 0 auto;">
   <div class="row">
<div class="col-md-3  col-md-pull-1 col-xs-9">
  <div class="card" style="height:70%; width:140%;">
    <div style=" text-align:center">
    <img class="card-img-top" src="images/card1.jpg" alt="Card image" style=" width:100%; height:21%; padding-bottom:2%;">
  </div>
    <div class="card-body" >
      <p class="card-text">We are a relief organization that distributes food to the world’s most vulnerable and mobilize resources
         to end hunger by 2030.
      </p>
    </div>
  </div>
</div>

<div class="col-md-3 col-md-push-1 col-xs-8 ">
  <div class="card card2" style="height:120%; width:150%;">
    <div style=" text-align:center">
    <img class="card-img-top" src="images/card2.jpg" alt="Card image" style=" width:100%; height:31%; padding-bottom:2%;">
  </div>
    <div class="card-body" >
      <p class="card-text"> Working to connect people with food and end hunger in the world.
        Donors, staff, and volunteers all play an important role in our efforts to end hunger.
      </p>
    </div>
  </div>
</div>

<div class="col-md-3 col-md-push-3 col-xs-8">
  <div class="card" style="height:120%; width:150%;">
    <div style=" text-align:center">
    <img class="card-img-top" src="images/card3.jpg" alt="Card image" style=" width:100%; height:31%;padding-bottom:2%;">
  </div>
    <div class="card-body" >
      <p class="card-text">We need your support to provide children with the nutrition and care they need to survive and grow up strong.
        Donate now and we can help change the world together!
      </p>
    </div>
  </div>
</div>

</div>
</div>

    <div class=" container pay">
      <div class="row">
      <h2 style="font-size: 380%; color:#666669  ;">DONATE!</h2>
      <div class="col-md-6 col-md-push-3  jumbo col-xs-12">
           <img src="images/share.png" style="margin-top:5%;">
       </div>
    <div id="payment-box"  class="col-md-12 jumbo col-xs-12">
        <h2>Click to donate now!</h2>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='sb-1wjqg3456614@business.example.com'> <input type='hidden'
                name='item_name' value='Donate'> <input type='hidden'
                name='amount' value=' '> <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='INR'> <input type='hidden'
                name='notify_url'
                value='http://localhost/payment/notify.php'>
            <input type='hidden' name='cancel_return'
                value='http://localhost/payment/cancel.php'>
            <input type='hidden' name='return' value='http://localhost/payment/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> <input
              type="submit" name="pay_now" id="donate"
              Value="DONATE!">
      </form>
    </div>
 </div>
</div>


<footer>
  <p> &#169;<TT> Food For All [Made by Rifa Fatima]</TT> </p>
</footer>


</body>
</html>
