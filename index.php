<?php
$continents = [
    'Eurasia' => ['Panthera tigris' ,'Mustela erminea' ,'Mellivora capensis'],
    'Africa' => ['Loxodonta africana' , 'Hippopotamus amphibius' ,'Gorilla'],
    'NorthAmerica' => ['Alligator mississippiensis' ,'Grizzly'],
    'SouthAmerica' => ['Eunectes murinus' ,'Pygocentrus nattereri'],
    'Australia' => ['Macropus' ,'Ornithorhynchus anatinus'],
    'Antarctica' => ['Spheniscidae'],
];
$animals_two_words = [];

foreach ($continents as $continent => $animals_continent) {
    foreach ($animals_continent as $animals) {
        $all_animals= [];
        $anim = explode(' ', $animals);
        $all_animals[]=$anim;

        foreach($all_animals as $k){
            if(count($k) === 2) {
                $comma_separated = implode(",", $k);
                $str = str_replace(',', ' ', $comma_separated);
                $animals_two_words[] = $str;
            }
        }
    }
}
echo 'Массив зверей название, которых состоит из 2-х слов:';
var_dump($animals_two_words);

foreach($animals_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

$random_first_word = [];

while (count($random_first_word) < count($animals_two_words)){
    $proverka = $first[rand(0, count($animals_two_words)-1)];
    if (!in_array($proverka, $random_first_word)) {
        $random_first_word[] = $proverka;
    }
}

$random_second_word = [];

while (count($random_second_word) < count($animals_two_words)){
    $proverka = $second[rand(0, count($animals_two_words)-1)];
    if (!in_array($proverka, $random_second_word)) {
        $random_second_word[] = $proverka;
    }
}

$final_result = [];

for($i = 0; $i < count($animals_two_words); $i++){
    $final_result[]= $random_first_word[$i] . ' ' . $random_second_word[$i];
}
echo 'Массив из выдуманных животных:';
var_dump($final_result);


?>