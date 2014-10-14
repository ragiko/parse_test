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

// Get the user from a non-authenticated method
$query = ParseUser::query();
$userAgain = $query->get("Wrj5rDMFxT");
$userGeoPoint = $userAgain->get("location");
$query->near("location", $userGeoPoint);
$query->limit(10);
$placesObjects = $query->find();

print_r($placesObjects);
