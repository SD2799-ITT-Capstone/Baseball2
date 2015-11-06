<?php


// get the q parameter from URL
$playerName = $_REQUEST["name"];
$columnName = $_REQUEST["columnName"];

$sqlString = "SELECT DISTINCT  `$columnName` 
FROM  `Master`
WHERE  `$columnName`  LIKE '$playerName%'  ORDER BY `$columnName` ASC LIMIT 5 ;";


$names = mysql_query($sqlString);

$hint = "";

// lookup all hints from array if $playerName is different from "" 
if ($playerName !== "") {
    $playerName = strtolower($playerName);
    $len=strlen($playerName);
    foreach($names as $name) {
        
                $hint .= ", ".$name;
            }
        }

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>