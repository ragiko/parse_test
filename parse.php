<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
 
ParseClient::initialize('LicvGZYQ3x9rDtfiDnaNy42GmIJdP0TuoVBJBFZi', 'QmaCbGyfU0chwYJ4n77cM1lv3pZeeVxNfa0FGrLE', 'pwLv0m1SioJBnuqlI3mvZ0Cv6jDRoC0BIRImMgGO');


// == 
try {
    $user = ParseUser::logIn("my name", "my pass");
    // Do stuff after successful login.
} catch (ParseException $error) {
    // The login failed. Check error to see why.
}

$currentUser = ParseUser::getCurrentUser();
if ($currentUser) {
    // do stuff with the user
    print_r($currentUser);
} else {
    // show the signup or login page
}
