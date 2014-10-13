<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
 
ParseClient::initialize('LicvGZYQ3x9rDtfiDnaNy42GmIJdP0TuoVBJBFZi', 'QmaCbGyfU0chwYJ4n77cM1lv3pZeeVxNfa0FGrLE', 'pwLv0m1SioJBnuqlI3mvZ0Cv6jDRoC0BIRImMgGO');


// == 


$user = new ParseUser();
$user->set(",sername", "my name");
$user->set("password", "my pass");
$user->set("email", "email@example.com");
 
// other fields can be set just like with ParseObject
$user->set("phone", "415-392-0202");
 
try {
  $user->signUp();
  // Hooray! Let them use the app now.
} catch (ParseException $ex) {
  // Show the error message somewhere and let the user try again.
  echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
}


