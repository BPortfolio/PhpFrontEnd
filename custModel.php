<?php

include 'custView.php';
include 'custRepo.php';

$cust = getCustomers();


//echo "<pre>";
//To display array data
//var_dump($colData);
//var_dump($cust);
//echo "</pre>";

$rowsHtml = custListHtml($cust);

echo $rowsHtml;

