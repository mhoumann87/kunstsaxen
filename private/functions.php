<?php

// Redirect to another page
function redirect_to($location)
{
  header('Location: '.$location);
  exit();
}


// Add all the files needed for the project
require_once 'functions.php';