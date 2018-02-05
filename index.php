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

foreach ($continents as $continent => $animalcontinent) {
    foreach ($animalcontinent as $animals) {
        $all_animals= [];
        $anim = explode(' ', $animals);
        $all_animals[]=$anim;

        foreach($all_animals as $k){
            if(count($k) === 2) {
                $comma_separated = implode(",", $k);
                $str = str_replace(',', ' ', $comma_separated);
                $animals2[] = $str;
            }
        }
    }
}
print_r($animals2);

foreach($animals2 as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

$random_first_word = [];

while (count($random_first_word) < count($animals2)){
    $proverka = $first[rand(0, count($animals2)-1)];
    if (!in_array($proverka, $random_first_word)) {
        array_push($random_first_word, $proverka);
    }
}

$random_second_word = [];

while (count($random_second_word) < count($animals2)){
    $proverka = $second[rand(0, count($animals2)-1)];
    if (!in_array($proverka, $random_second_word)) {
        array_push($random_second_word, $proverka);
    }
}

$final_result = [];

for($i = 0; $i < count($animals2); $i++){
    $final_result[]= $random_first_word[$i] . ' ' . $random_second_word[$i];
}

var_dump($final_result);
?>