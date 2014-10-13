<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseACL;
 
ParseClient::initialize('LicvGZYQ3x9rDtfiDnaNy42GmIJdP0TuoVBJBFZi', 'QmaCbGyfU0chwYJ4n77cM1lv3pZeeVxNfa0FGrLE', 'pwLv0m1SioJBnuqlI3mvZ0Cv6jDRoC0BIRImMgGO');


// == 

// login
try {
    $user = ParseUser::logIn("my name", "my pass");
    // Do stuff after successful login.
} catch (ParseException $error) {
    // The login failed. Check error to see why.
}

$privateNote = new ParseObject("Note");
$privateNote->set("content", "This note is private!");
$privateNote->setACL(ParseACL::createACLWithUser(ParseUser::getCurrentUser()));
$privateNote->save();
