<?php
$continents = [
    'Eurasia' => ['Panthera tigris', 'Mustela erminea', 'Mellivora capensis'],
    'Africa' => ['Loxodonta africana', 'Hippopotamus amphibius', 'Gorilla', 'Orycteropus afer'],
    'NorthAmerica' => ['Alligator mississippiensis', 'Grizzly', 'Gulo gulo'],
    'SouthAmerica' => ['Eunectes murinus', 'Pygocentrus nattereri', 'Panthera onca'],
    'Australia' => ['Macropus', 'Ornithorhynchus anatinus', 'Cacatuidae'],
    'Antarctica' => ['Spheniscidae', 'Leptonychotes weddellii', 'Aptenodytes forsteri'],
];

$animals2 = [];
$first = [];
$second = [];
$fantasy_animals = [];

foreach ($continents as $continent => $animalcontinent) {
    foreach ($animalcontinent as $animals) {
        if (str_word_count($animals)==2) {
            $animals2[$continent][] = $animals;
            $counts = explode(' ', $animals);
            $first[$continent][] = $counts[0];
            $second[] = $counts[1];
        }
    }
}

shuffle($second);

$i = 0;
foreach ($first as $continent => $animalcontinent) {
    foreach ($animalcontinent as $animals) {
        $fantasy_animals[$continent][] = $animals.' '.$second[$i];
        $i++;
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание к лекции 1.3 «Строки, массивы и объекты»</title>
</head>
<body>
<?php
    echo '<h1>Массив животных</h1>';
    foreach ($continents as $continent => $animalcontinent) {
        $animals = implode(', ', $animalcontinent);
        echo "<h2>$continent</h2><p>$animals</p>";
    }
    echo '<hr>';
    echo '<h1>Массив выдуманных животных</h1>';
    //выводим результат
    foreach ($fantasy_animals as $continent => $animalcontinent) {
        $new_animals = implode(', ', $animalcontinent);
        echo "<h2>$continent</h2><p>$new_animals</p>";
    }
?>
</body>
</html>
