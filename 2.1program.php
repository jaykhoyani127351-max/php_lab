<?php

echo "Numeric Array (Days of Week): <br>";
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

print_r($days);
    echo "<br>";

echo "<br>";

echo "Associative Array (Months and Days): <br>";

$months = array(
    "January" => 30,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

print_r($months);
    echo  "<br>";


echo "<br>";

echo "Multidimensional Array (Laptop Details): <br>";

$laptops = array(
    "Dell" => array(
       "model" => "XPS 13", "price" => 120000
    ),
    "HP" => array(
        "model" => "Pavilion 14", "price" => 60000
       
    )
    );



print_r($laptops);
     echo "<br>";
     echo"";


?>