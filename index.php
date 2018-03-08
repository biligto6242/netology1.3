<?php
$continents = [
    'Eurasia' => ['Panthera tigris' ,'Mustela erminea' ,'Mellivora capensis'],
    'Africa' => ['Loxodonta africana' , 'Hippopotamus amphibius' ,'Gorilla'],
    'NorthAmerica' => ['Alligator mississippiensis' ,'Grizzly'],
    'SouthAmerica' => ['Eunectes murinus' ,'Pygocentrus nattereri'],
    'Australia' => ['Macropus' ,'Ornithorhynchus anatinus'],
    'Antarctica' => ['Spheniscidae'],
];
$animals2 = [];
$first = [];
$second = [];

foreach ($continents as $continent => $animalcontinent) {
    foreach ($animalcontinent as $animals) {
        $count = substr_count($animals, ' ');
        if ($count === 1) {
            $animals2[] = $animals;
        }
    }
}
echo 'Массив зверей название, которых состоит из 2-х слов:';
var_dump($animals2);

foreach($animals2 as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

$fantasy_animals= [];

echo '<hr>';
shuffle($second);
echo "Массив из выдуманных животных:";
echo '<hr>';
foreach ($second as $last) {
    $first1 = array_shift($first);
    echo $first1 . ' ' . $last . '<br>';
}
?>