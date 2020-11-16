<?php

  error_reporting(E_ALL);
  ini_set("display_errors",1);

  $shipping = $_POST["shipping"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $beans = $_POST["Beans"];
  $bakedbeans = $_POST["BakedBeans"];
  $goldinfusedbeans = $_POST["Goldinfusedbeans"];
  $subtotal1 = 0;
  $subtotal2 = 0;
  $subtotal3 = 0;
  $total = 0;

  $subtotal1 = $beans * 5;
  $subtotal2 = $bakedbeans * 30;
  $subtotal3 = $goldinfusedbeans * 600;
  $total = $subtotal1 + $subtotal2 + $subtotal3;

  echo "<p> Welcome!";
  echo "<p>Your username is $username<br>";
  echo "<p>Your password is $password<br>";
  echo "<p>You chose $shipping shipping<br>";
  echo "<p>You purchased: $beans Bean(s): $$subtotal1.00";
  echo "<p>You purchased: $bakedbeans Baked Bean(s): $$subtotal2.00";
  echo "<p>You purchased: $goldinfusedbeans Gold infused Bean(s): $$subtotal3.00";
  echo "<p>Your total cost is: $$total.00<br>";





?>
