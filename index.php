<?php
/*$animalsEurasia = ['Panthera tigris' ,'Mustela erminea' ,'Mellivora capensis'];
$animalsAfrica = ['Loxodonta africana' , 'Hippopotamus amphibius' ,'Gorilla'];
$animalsNorthAmerica = ['Alligator mississippiensis' ,'Grizzly'];
$animalsSouthAmerica = ['Eunectes murinus' ,'Pygocentrus nattereri'];
$animalsAustralia = ['Macropus' ,'Ornithorhynchus anatinus'];
$animalsAntarctica = ['Spheniscidae'];*/
/*$continent = ['Eurasia', 'Africa', 'NorthAmerica', 'SouthAmerica', 'Australia', 'Antarctica'];*/
$continents = [
    'Eurasia' => ['Panthera tigris' ,'Mustela erminea' ,'Mellivora capensis'],
    'Africa' => ['Loxodonta africana' , 'Hippopotamus amphibius' ,'Gorilla'],
    'NorthAmerica' => ['Alligator mississippiensis' ,'Grizzly'],
    'SouthAmerica' => ['Eunectes murinus' ,'Pygocentrus nattereri'],
    'Australia' => ['Macropus' ,'Ornithorhynchus anatinus'],
    'Antarctica' => ['Spheniscidae'],
];
$animals2 = [array()];
foreach ($continents as $continent => $animalcontinent) {
    foreach ($animalcontinent as $animals) {
        if (strpos($animals, ' ') !== false) { // Проверяем на наличие пробела между словами
            array_push($animals2, $animals);
        }
    }
}
print_r($animals2);

    /*for ($i = 0; $i < count($animalscontinent); $i++) {
        if (array_count_values($animalscontinent) == 1) {
            $animals2 = $animalscontinent;
            echo '<p>' . $animals2[$i] . '</p>', PHP_EOL;
        }
    }*/
    /*foreach ($animalscontinent as $animals) {
        echo '<p>' . $animals. ',</p>', PHP_EOL;
    }*/

/*foreach ($continents as $continent => $animalscontinent) {
    echo '<h2>' . $continent . ':</h2>', PHP_EOL;

    for ($i = 0; $i < count($animalscontinent); $i++) {
        echo '<p>' . $animalscontinent[$i] . '</p>', PHP_EOL;
    }
    /*foreach ($animalscontinent as $animals) {
        echo '<p>' . $animals. ',</p>', PHP_EOL;
    }
}*/
/*echo '<pre>';
print_r($continents);
echo '</pre>';*/
/*$animals = ['Eurasia' => 'Panthera tigris' ,'Eurasia' => 'Panthera tigris' ,'Eurasia' => 'Panthera tigris' ,'Eurasia' => 'Panthera tigris' ,];*/
?>