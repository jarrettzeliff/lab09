<?php

  error_reporting(E_ALL);
  ini_set("display_errors",1);

  $answer1 = $_POST["answer1"];
  $answer2 = $_POST["answer2"];
  $answer3 = $_POST["answer3"];
  $answer4 = $_POST["answer4"];
  $answer5 = $_POST["answer5"];

  echo "<p>Question 1: How many monkey species are there?<br>";
  echo "You answered: $answer1<br>";
  echo "The Correct answer is: 264<p><br>";

  echo "<p>Question 2: Where do monkeys not live?<br>";
  echo "You answered: $answer2<br>";
  echo "The Correct answer is: The deep ocean<p><br>";

  echo "<p>Question 3: What famous monkey was wrongfully killed of a crime he did not commit?<br>";
  echo "You answered: $answer3<br>";
  echo "The Correct answer is: Harambe<p><br>";

  echo "<p>Question 4: What punishment is there for monkey abuse in the United States??<br>";
  echo "You answered: $answer4<br>";
  echo "The Correct answer is: Death by electric chair<p><br>";


  echo "<p>Question 5: Fill in the blank: Basically I am _____<br>";
  echo "You answered: $answer5<br>";
  echo "The Correct answer is: Monky<p><br>";

  $correct = 0;
  if ($answer1 == "264")
  {
    $correct++;
  }
  if ($answer2 == "The deep ocean")
  {
    $correct++;
  }
  if ($answer3 == "Harambe")
  {
    $correct++;
  }
  if ($answer4 == "Death by electric chair")
  {
    $correct++;
  }
  if ($answer5 == "Monky")
  {
    $correct++;
  }

  $precentagescore = ($correct/5) * 100;

  echo "<p> You scored : $correct out of 5 <p><br>";
  echo "<p> Your grade is a : $precentagescore % <p><br>";


?>
