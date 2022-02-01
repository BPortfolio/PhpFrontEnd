<?php

include 'custView.php';
include 'custRepo.php';

/*
$cust = array (
    array('CompanyName'=>'Volvo',      'State'=>'Utah'),
    array('CompanyName'=>'BMV',        'State'=>'California'),
    array('CompanyName'=>'Saab',       'State'=>'Texas'),
    array('CompanyName'=>'Land Rover', 'State'=>'Florida')
);
*/

$cust = getCustomers();


//echo "<pre>";
//To display array data
//var_dump($colData);
//var_dump($cust);
//echo "</pre>";

$rowsHtml = custListHtml($cust);

echo $rowsHtml;

