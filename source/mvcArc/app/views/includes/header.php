<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Packages -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <!-- Main css -->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css" />
  <title><?php echo SITENAME ?></title>
</head>

<?php
  $location_home = URLROOT . "home";
  $location_about = URLROOT . "about";
  $location_contact = URLROOT . "contact";
?>

<body>
  <div class="topnav clearfix" id="myTopnav">
    <div class="topnav_item active" onclick="navFunction('<?php echo URLROOT ?>')">Home</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/tutorials')">Tutorials</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/faq')">FAQ</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/contact')">Contact</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/users/register')">Register</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/users/login')">Login</div>
    <div class="topnav_item_humIcon " onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </div>
  </div>
  <div>