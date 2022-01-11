<?php

// part 1
echo addcslashes("Ajourd'hui il fait -1000 degrés", "'-") . "<br>";

// part 2
$string2 = "le texte de votre choix";

echo strtoupper($string2) . "<br>";
echo ucfirst($string2) . "<br>";
echo ucwords($string2) . "<br>";

$string3 = "LE TEXTE DE VOTRE CHOIX";

echo strtolower($string3) . "<br>";
echo lcfirst($string3) . "<br>";

// part 3
echo str_word_count("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis cumque dignissimos, 
    eligendi enim error est modi molestias numquam quia tenetur ut veritatis? Adipisci cum deleniti laboriosam modi, 
    numquam sunt!") . "<br>";

// part 4
$array = explode(" ", "une liste de mots");
foreach ($array as $value) {
    echo $value . "<br>";
}

// part 5
echo implode(" ", ["une", "liste", "de", "mots"])  . "<br>";

// part 6
echo strrev($string2)  . "<br>";
echo str_shuffle($string2)  . "<br>";

// part 7
$string4 = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";

echo $string4 . "<br>";
echo strip_tags($string4) . "<br>";

// part 8
echo str_pad($string2, 500, "|", 0) . "<br>";

// part 9
for ($i = 0; $i < strlen($string2); $i++) {
    echo $string2[$i] . "<br>";
}

// part 10
echo str_replace("choix", "world", $string2) . "<br>";

// part 11
echo strpos("le mot test", "test") . "<br>";

// part 12
function isFirst($string, $searchWord) : bool {
    if (strpos($string, $searchWord) === 0) {
        return true;
    } else {
        return false;
    }
}

echo isFirst("le text de mon choix", "le") . "<br>";

// part 13
function isLast($string, $searchWord) {
    if (strpos($string, $searchWord) === strlen($string) - strlen($searchWord)) {
        return true;
    } else {
        return false;
    }
}

echo isLast("le text de notre choix", "choix");