<?php

include 'custView.php';


$custDetail = array('Name'=>'Volvo','Contact'=>'Cecilia Chapman', 'Phone'=>'(801) 777-8888',
    'Street'=>'711-2880 Nulla St.', 'City'=>'Mankato', 'State'=>'Mississippi', 'Zip'=>'96522');

$rowsHtml = custDetailHtml($custDetail);

echo $rowsHtml;

/*
$cust = array (
    array('Name'=>'Volvo'),
    array('Name'=>'BMV'),
    array('Name'=>'Saab'),
    array('Name'=>'Land Rover')
);
*/



//$cust = array('Volvo', 'BMW');


