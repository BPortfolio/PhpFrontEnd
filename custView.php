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

        //$companyName = $cust["CompanyName"];
        //$stateName = $cust["State"];

        $companyName = "";
        $stateName = "";

        foreach($cust as $col){
            if($col['ColName']=="Company Name"){
             $companyName = $col['ColVal'];
            }
            if($col['ColName']=="State"){
                $stateName = $col['ColVal'];
            }
        }

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


function custDetailHtml($customer): string
{
    $html = "<table class='center'>".PHP_EOL;

    foreach($customer as $col){
        $html .= '<tr>'.PHP_EOL;
        $html .= "<td>".$col['ColName'] ."</td>".PHP_EOL;
        $html .= "<td>".$col['ColVal']."</td>".PHP_EOL;
        $html .= "</tr>".PHP_EOL;
    }

    $html .= "</table>".PHP_EOL;

    return $html;
}

