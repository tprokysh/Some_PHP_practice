<?php
$arr["Boy"] = array("Name" => "Tal",
                    "Surname" => "Prokysh",
                    "Age" => "19");
$arr["Girl"] = array("Name" => "Alina",
                     "Surname" => "Rudiak",
                     "Age" => "19");
$pets = array(array("Chepchik", "Rat", "1"),
              array("Chiler", "Rat", "1"),
              array("Dumbas", "Rat", "1"),
              array("Manunya", "Rat", "1"),
              array("Chel", "Rat", "1"));
echo $arr["Girl"]["Name"] . " love " . $pets[0][0];
?>