<?php


$conn=mysqli_connect("localhost","H","","robot-movement");


 if(isset($_GET['Right']))
  {
    echo "<h1>R</h1>";
    $query = "INSERT INTO control (Right) VALUES ('R')";
    mysqli_query($conn, $query);

  }

  if(isset($_GET['Left']))
  {
    echo "<h1>L</h1>";
    $query = "INSERT INTO control (Left) VALUES ('L')";
    mysqli_query($conn, $query);

  }

  if(isset($_GET['Stop']))
  {
    echo "<h1>S</h1>";
    $query = "INSERT INTO control (Stop) VALUES ('S')";
    mysqli_query($conn, $query);
  }

  if(isset($_GET['Forward']))
  {
    echo "<h1>F</h1>";
    $query = "INSERT INTO control (Forward) VALUES ('F')";
    mysqli_query($conn, $query);
  }

  if(isset($_GET['Backward']))
  {
    echo "<h1>B</h1>";
    $query = "INSERT INTO control (Backward) VALUES ('B')";
    mysqli_query($conn, $query);
  }


?>
