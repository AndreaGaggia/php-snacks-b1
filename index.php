<?php 
    /*
    PHP Snack 1:
    Creiamo un array 'matches' contenente altri array
    i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60
    PHP Snack 2:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
     */

    $matches = [
        [
            "home" => [
                "team" => "Olimpia Milano",
                "points" => 55
            ],
            "visitors" => [
                "team" => "Cantù",
                "points" => 60
            ],
        ],
        [
            "home" => [
                "team" => "Virtus Bologna",
                "points" => 55
            ],
            "visitors" => [
                "team" => "Pesaro",
                "points" => 60
            ],
        ],
        [
            "home" => [
                "team" => "Mens Sana Siena",
                "points" => 51
            ],
            "visitors" => [
                "team" => "Treviso",
                "points" => 67
            ],
        ],
        [
            "home" => [
                "team" => "Virtus Roma",
                "points" => 35
            ],
            "visitors" => [
                "team" => "Fortitudo Bologna",
                "points" => 70
            ],
        ],
    ];

    # snack2
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET[age];
    $check_1 = strpos($mail, "@");
    $check_2 = strpos($mail, ".");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
    <h2>Snack 1 - matches</h2>
    <p>
        <?php
            for ($i=0; $i < count($matches); $i++) { 
                echo "{$matches[$i][home]['team']} - {$matches[$i][visitors][team]} | {$matches[$i][home][points]} - {$matches[$i][visitors][points]}<br>";
            };
        ?> 
    </p>
    <hr>
    <h2>Snack 2</h2>
    <code>php-snacks-b1/index.php?name=_&mail=_&age=_</code>
    <p>
        <?php
            if (strlen($name) > 3 && is_numeric($age) && $check_1 !== false && $check_2 !== false) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            };
        ?>
    </p>
</body>
</html>