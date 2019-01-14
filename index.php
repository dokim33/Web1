<?php
    require_once('header.php');
    if(!isset($_GET['id'])){
    require_once "home.php";
  } else {
   require_once "{$_GET['id']}.php";
  }

    require_once('footer.php');
