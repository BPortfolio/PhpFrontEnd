<?php

/*
const Company = "Company Name";
const contact = "Contact Person";
const phone = "Phone Number";
const street = "Street Address";
const suite = "Suite Address";
const city = "City";
const state = "State";
const zip = "Zip";
*/

$colHeader = array();
$colData = array();
$colRows = array();


function colIndex($col, $i)
{
    global $colHeader;
    //echo "col: $col" . PHP_EOL;
    switch ($col) {

        case Company:
            $temp = array('ColName' => Company, 'Index' => $i);
            $colHeader[] = $temp;
            break;
        case contact:
            $temp = array('ColName' => contact, 'Index' => $i);
            $colHeader[] = $temp;
            break;
        case phone:
            $temp = array('ColName' => phone, 'Index' => $i);
            $colHeader[] = $temp;
            break;
        case street:
            $temp = array('ColName' => street, 'Index' => $i);
            $colHeader[] = $temp;
            break;

        case suite:
            $temp = array('ColName' => suite, 'Index' => $i);
            $colHeader[] = $temp;
            break;
        case city:
            $temp = array('ColName' => city, 'Index' => $i);
            $colHeader[] = $temp;
            break;

        case state:
            $temp = array('ColName' => state, 'Index' => $i);
            $colHeader[] = $temp;
            break;

        case zip:
            $temp = array('ColName' => zip, 'Index' => $i);
            $colHeader[] = $temp;
            break;

        default:
            //write to log
    }
}

function getCol($col, $i): array
{
    global $colHeader;

    foreach ($colHeader as $item) {
        if ($item['Index'] == $i && trim($col) !== null) {
            $item['ColName'] = trim($item['ColName']);
            $col = trim($col);

            return array('ColName' => $item['ColName'], 'ColVal' => $col);
        }
    }

    return array();
}

function getCustomers(): array
{
    global $colData;
    global $colRows;


    $rawData = array();

    if (($open = fopen("CRM.csv", "r")) !== FALSE) {

        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $rawData[] = $data;
        }

        fclose($open);
    }


    if (count($rawData) > 1) {
        for ($i = 0; $i <= count($rawData[0]) - 1; $i++) {
            if (empty(trim($rawData[0][$i]) == false)) {
                colIndex($rawData[0][$i], $i);
            }

        }
    }


    $j = 0;
    foreach ($rawData as $row) {
        //Skipping column header
        if ($j != 0) {
            $colRows = array();
            for ($i = 0; $i <= count($row) - 1; $i++) {

                //Skipping empty columns
                if (empty(trim($row[$i])) == false) {
                    $arrCol = getCol($row[$i], $i);
                    $colRows[] = $arrCol;
                }
            }
            $colData[] = $colRows;

        }

        $j++;
    }

    return $colData;
}



function getCustomer($customer): array
{
    $customers = getCustomers();

    foreach($customers as $row){
        foreach($row as $col){
            if($col['ColName']='Company Name' && $col['ColVal'] == $customer){
                //found the customer
                return $row;
            }

        }
    }

    return array();
}


//$customers = getCustomers();

//echo "<pre>";
//To display array data
//var_dump($colData);
//var_dump($customers);
//echo "</pre>";









