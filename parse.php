<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseQuery;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseACL;
use Parse\ParseGeoPoint;
 
ParseClient::initialize('LicvGZYQ3x9rDtfiDnaNy42GmIJdP0TuoVBJBFZi', 'QmaCbGyfU0chwYJ4n77cM1lv3pZeeVxNfa0FGrLE', 'pwLv0m1SioJBnuqlI3mvZ0Cv6jDRoC0BIRImMgGO');


// == 

$userObject = ParseUser::logIn("my name", "my pass");
// User's location
$userGeoPoint = $userObject->get("location");
// Create a query for places
$query = new ParseQuery("TestObject");
// Interested in locations near user.
$query->near("location", $userGeoPoint);
// Limit what could be a lot of points.
$query->limit(10);
// Final array of objects
$placesObjects = $query->find();

print_r($placesObjects);
