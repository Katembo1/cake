<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and login</title>
    

<?php
echo "<link href='css/styles.css' rel='stylesheet'>";
echo "<link href='css/styles2.css' rel='stylesheet'>";
?>

</head>

<body>
   
<?php

if(!isset( $_GET['user'])){
echo     '<nav id="navbar">
<h1><a href="auth/signup.php">REGISTER</a></h1>
<h1><a href="auth/login.php">LOGIN</a></h1>
</nav>
<link rel="stylesheet" href="css/styles.css">
';
}
else{
  
}
?>

<div id="icon"><span id="icn">
    <?php
    if(isset($_GET['user'])){
        echo strtoupper($_GET['user'][0]);
    }

?>

</span></div>

<main id="cont">

<div class="div1">
    <div id="imgdiv"><img src="static/book1.jpg" id="img1"></div>
    <div id="descriptdiv">
        <form action="/cart/cart.inc.php" method="post">
            <?php
            if(isset($_GET['user'])){
echo `
            <input type="text" name="email" id="cart"  >
            <input type="text" name="cart" id="cart"><br><br>
            <span>PRICE KSH 3.03</span><br>
            <input type="submit" value="BUY">
            `;
            }?>
        </form>
</div>
</div>




<div class="div2">
    <div id="imgdiv"><img src="static/book2.jpeg" id="img2"></div>
    <div id="descriptdiv">
        <div onclick="alert('book bought ')">Buy book</div>
    </div>
</div>


<div class="div3">
    <div id="imgdiv"><img src="static/book3.jpeg" id="img3"></div>
    <div id="descriptdiv"><div onclick="alert('book bought ')"><button>Buy book</button></div></div>
</div>

</main>
<style type="text/css">
.div1{
   
    max-width:15em;
}
#cart{
    visibility:visible;
}
    </style>

</body>
</html>