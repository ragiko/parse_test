<?php

require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('LicvGZYQ3x9rDtfiDnaNy42GmIJdP0TuoVBJBFZi', 'QmaCbGyfU0chwYJ4n77cM1lv3pZeeVxNfa0FGrLE', 'pwLv0m1SioJBnuqlI3mvZ0Cv6jDRoC0BIRImMgGO');


// == 

$query = new Parse\ParseQuery("GameScore");

try {
      $gameScore = $query->get("u2uyQRLD7d");
      $gameScore->delete("playerName");
      $gameScore->save();
      // The object was retrieved successfully.
} catch (ParseException $ex) {
      // The object was not retrieved successfully.
      // error is a ParseException with an error code and message.
}
