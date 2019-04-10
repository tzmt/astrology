<?php
include '../vendor/autoload.php';

use Prokerala\Astrology\Astro;

$astro = new Astro('YXNlVTZURDRDSWxVc04yd3NoeGVJdDNsZWJZVkswZzJEdHVlaWJaeA==');



/**
* To get Panchang details
* ayanamsa is always 1
* datetime should be ISO 8601 format
* coordinates should be valid latitude and longitude eg : `10.214747,78.097626`
**/

$ayanamsa = 1;
$datetime = '2004-02-12T15:19:21+00:00';
$coordinates = '10.214747,78.097626';

$response = $astro->calculatePanchang($datetime, $coordinates, $ayanamsa);

/**
* To get Birth Chart details
* ayanamsa is always 1
* dob should be ISO 8601 format
* coordinates should be valid latitude and longitude eg : `10.214747,78.097626`
**/
$ayanamsa = 1;
$dob = '2004-02-12T15:19:21+00:00';
$coordinates = '10.214747,78.097626';

$response = $astro->calculateBirthChart($dob, $coordinates, $ayanamsa);


/**
* To get Manglik/Mangal Dosha details
* ayanamsa is always 1
* dob should be ISO 8601 format
* coordinates should be valid latitude and longitude eg : `10.214747,78.097626`
**/
$ayanamsa = 1;
$dob = '2004-02-12T15:19:21+00:00';
$coordinates = '10.214747,78.097626';

$response = $astro->calculateManglik($dob, $coordinates, $ayanamsa);

/**
* To get Kundali Matching/Gun Milan/Ashta Koot details
* (It is the north indian match making method)
* 
* ayanamsa is always 1
* dob should be ISO 8601 format
* coordinates should be valid latitude and longitude eg : `10.214747,78.097626`
**/
$ayanamsa = 1;
$bride_dob = '2004-02-12T15:19:21+00:00';
$bride_coordinates = '10.214747,78.097626';
$bridegroom_dob = '2004-02-12T15:19:21+00:00';
$bridegroom_coordinates = '10.214747,78.097626';

$response = $astro->calculateKundaliMatching($bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa);

/**
* To get Horoscope Matching/Dasha Porutham/Dasha Koot details
* (It is the south indian match making method)
*
* system is either kerala/tamil
* ayanamsa is always 1
* dob should be ISO 8601 format
* coordinates should be valid latitude and longitude eg : `10.214747,78.097626`
**/

$system = 'tamil';
$ayanamsa = 1;
$bride_dob = '2004-02-12T15:19:21+00:00';
$bride_coordinates = '10.214747,78.097626';
$bridegroom_dob = '2004-02-12T15:19:21+00:00';
$bridegroom_coordinates = '10.214747,78.097626';

$response = $astro->calculateHoroscopeMatching($system, $bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa);

echo '<pre>'. print_r($response, true) .'</pre>';








// $system = 'tamil';
// $ayanamsa = 1;
// $bride_dob = '2004-02-12T15:19:21+00:00';
// $datetime = '2004-02-12T15:19:21+00:00';
// $dob = '2004-02-12T15:19:21+00:00';
// $bridegroom_dob = '2004-02-12T15:19:21+00:00';
// $bride_coordinates = '10.214747,78.097626';
// $bridegroom_coordinates = '10.214747,78.097626';
// $coordinates = '10.214747,78.097626';


// // echo '<pre>'. print_r($astro->calculateHoroscopeMatching($bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa, $system), true) .'</pre>';

// // echo '<pre>'. print_r($astro->calculateKundaliMatching($bride_dob, $bridegroom_dob, $bride_coordinates, $bridegroom_coordinates, $ayanamsa), true) .'</pre>';


// // echo '<pre>'. print_r($astro->calculatePanchang($datetime, $coordinates, $ayanamsa), true) .'</pre>';


// // echo '<pre>'. print_r($astro->calculateManglik($dob, $coordinates, $ayanamsa), true) .'</pre>';


// echo '<pre>'. print_r($astro->calculateBirthChart($dob, $coordinates, $ayanamsa), true) .'</pre>';


