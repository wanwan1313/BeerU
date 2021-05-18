
<?php 

// echo '[]'; exit;


include __DIR__ . '../../php/common/config.php';


$output = [
    'msg' => ''
];

$countryName = $_POST['countryName'];
$mapSQL = "SELECT * FROM `map` WHERE `country` = ?";
$map_stmt = $pdo->prepare($mapSQL);
$map_stmt->execute([$_POST['countryName']]);
$map_row = $map_stmt->fetch();

// $cups_sql = "SELECT * FROM `products` WHERE `abv`=0 ORDER BY RAND() LIMIT 3";
// $cups = $pdo->query($cups_sql)->fetchAll();

// ???怎麼放上去
$beers_sql = "SELECT * FROM `products` WHERE `country_sid`=? ORDER BY RAND() LIMIT 3";
$beers_stmt = $pdo->prepare($beers_sql);
$beers_stmt->execute([$map_row['sid']]);
$beers = $beers_stmt->fetchAll();

echo json_encode($map_row, JSON_UNESCAPED_UNICODE);
// echo json_encode($beers, JSON_UNESCAPED_UNICODE);

// echo json_encode([
//     'map_row' => $map_row,
//     'cups' => $cups,
//     'beers' => $beers,
// ], JSON_UNESCAPED_UNICODE
// );

