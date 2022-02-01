<?php

const Company = "Company Name";
const contact = "Contact Person";
const phone = "Phone Number";
const street = "Street Address";
const suite = "Suite Address";
const city = "City";
const state = "State";
const zip = "Zip";

function custListHtml($custList): string
{
    $html = "<table class='center'>".PHP_EOL;
    foreach($custList as $cust){

        $companyName = $cust["CompanyName"];
        $stateName = $cust["State"];
        /*
        foreach($cust as $col){
            if($col['ColName']=="Company Name"){
             $companyName = $col['ColVal'];
            }
            if($col['ColName']=="State"){
                $stateName = $col['ColVal'];
            }
        }
        */
        $html .= '<tr>'.PHP_EOL;
        $html .= "<td>".$companyName."</td>".PHP_EOL;
        $html .= "<td>".$stateName."</td>".PHP_EOL;
        $html .= "<td><button type='button' name='".$companyName."'".PHP_EOL;
        $html .= " onclick='openDetail(".chr(34).$companyName. chr(34).")'>Detail</button></td>".PHP_EOL;
        $html .= "</tr>".PHP_EOL;

    }
    $html .= "</table>".PHP_EOL;
    return $html;
}

function custDetailHtml($detail){
    $html = "<table class='center'>".PHP_EOL;
    $html .= '<tr>'.PHP_EOL;
    $html .= "<td>Company Name</td>".PHP_EOL;
    $html .= "<td>".$detail['Name']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= '<tr>'.PHP_EOL;
    $html .= "<td>Contact</td>".PHP_EOL;
    $html .= "<td>".$detail['Contact']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= '<tr>'.PHP_EOL;
    $html .= "<td>Phone</td>".PHP_EOL;
    $html .= "<td>".$detail['Phone']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= '<tr>'.PHP_EOL;
    $html .= "<td>Street</td>".PHP_EOL;
    $html .= "<td>".$detail['Street']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= "<td>City</td>".PHP_EOL;
    $html .= "<td>".$detail['City']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= "<td>State</td>".PHP_EOL;
    $html .= "<td>".$detail['State']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;
    $html .= "<td>Zip</td>".PHP_EOL;
    $html .= "<td>".$detail['Zip']."</td>".PHP_EOL;
    $html .= "</tr>".PHP_EOL;


    $html .= "</table>".PHP_EOL;

    return $html;
}