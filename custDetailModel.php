<?php

include 'custView.php';
include 'custRepo.php';


$companyName = trim($_GET['Name']);


if(empty($companyName)){
    echo "<h2>No Company Name Given.</h2>".PHP_EOL;
    exit();
}


$customer = getCustomer($companyName);

$rowsHtml = custDetailHtml($customer);

echo $rowsHtml;




