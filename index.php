<?php

    $num = 3;

    if ($num % 2 == 0) {
        var_dump('Il numero è pari');
    }
    else {
        var_dump('Il numero è dispari');
    }

    if ($num < 0)
        var_dump('Il numero è negativo');
    else if ($num == 0)
        var_dump('Il numero è zero');
    else
        var_dump('Il numero è positivo');

    if ($num == 3) {
        var_dump('Il numero è 3');
    }
    else {
        var_dump('Il numero NON è 3');
    }

    if ($num == '3') {
        var_dump('Il numero è 3');
    }
    else {
        var_dump('Il numero NON è 3');
    }

    if ($num === '3') {
        var_dump('Il numero è 3');
    }
    else {
        var_dump('Il numero NON è 3');
    }
    	
    $username = $_GET['user'] ?? 'nobody';

    if (isset($_GET['user'])) {
        $username = $_GET['user'];
    }
    else {
        $username = 'nobody';
    }

    $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

    /* 
        ----------------------------------------------------------------------
    */

    $arr = [
        'Valore1', 
        'Valore2', 
        'Valore3'
    ];

    var_dump($arr);
    var_dump($arr[1]);

    $person = [
        'first_name' => 'Alessio',
        'last_name' => 'Vietri',
    ];

    var_dump($person);
    var_dump($person['last_name']);

    $nItems = count($arr);
    var_dump($nItems);

    $arr[] = 'Valore4';
    var_dump($arr);

    $nItems = count($arr);
    var_dump($nItems);

    $person["age"] = 32;
    var_dump($person);

    $team = [   // primo livello: array "contenitore" con indici numerici
        [       // secondi livelli: array associtativi
            "name" => "Fabio",
            "lastname" => "Forghieri",
            "role" => "Co-Founder",
        ],
        [
            "name" => "Michele",
            "lastname" => "Papagni",
            "role" => "Head of Teaching",
        ]
    ];
    var_dump($team); 
    var_dump($team[0]);
    var_dump($team[0]['lastname']);

    if (array_key_exists('age', $person)) {
        var_dump('Si, la chiave age esiste');
    }
    else {
        var_dump('No, la chiave age NON esiste');
    }

    if (array_key_exists('ciccio', $person)) {
        var_dump('Si, la chiave ciccio esiste');
    }
    else {
        var_dump('No, la chiave ciccio NON esiste');
    }

    if (in_array('Valore2', $arr)) {
        var_dump('Si, il valore Valore2 è presente nell\'array');
    }
    else {
        var_dump('No, il valore Valore2 NON è presente nell\'array');
    }

    if (in_array('ciccio', $arr)) {
        var_dump('Si, il valore ciccio è presente nell\'array');
    }
    else {
        var_dump('No, il valore ciccio NON è presente nell\'array');
    }

    if (array_key_exists('lastname', $team[0])) {
        var_dump('Si, la chiave lastname esiste nel sotto-array');
    }
    else {
        var_dump('No, la chiave lastname NON esiste nel sotto-array');
    }

    var_dump(array_keys($team[0]));     // ['name', 'lastname', 'role']
    var_dump(array_values($team[0]));   // ['Fabio', 'Forghieri', 'Co-Founder']

    // $mergedArray = array_merge(array_keys($team[0]), array_values($team[0]));
    // $mergedArray = array_merge($team, array_values($team[0]));
    // $mergedArray = array_merge($person, $team[0]);
    $mergedArray = array_merge($person, $arr);
    var_dump($mergedArray);

    $mixedArray = [
        'name' => 'Mario',
        4,
        'email' => 'mario.rossi@email.it',
        'vero',
        27
    ];
    var_dump($mixedArray);

    var_dump(array_search('Mario', $mixedArray));
    var_dump(array_search(27, $mixedArray));
    var_dump(array_search('Ciao', $mixedArray));

    $myNewInt = rand(1, 100);
    var_dump($myNewInt);

    for ($i = 0; $i < 10; $i++) {
        var_dump($i);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>41 LC PHP Fundamentals</title>
    </head>
    <body>

        <main>
            <ul>
                <?php
                    for ($i = 0; $i < 10; $i++) {
                        echo '<li>';
                        echo 'Indice su cui sto iterando:';
                        echo '<p>';
                        echo '<span>';
                        echo $i;
                        echo '</span>';
                        echo '</p>';
                        echo '</li>';
                    }
                ?>
            </ul>
            <ul>
                <?php
                    for ($i = 0; $i < 10; $i++) {   // Apertura FOR
                        if ($i % 2 == 0) {          // Apertura IF
                ?>

                    <li>
                        Indice su cui sto iterando:
                        <p>
                            <span>
                                <?php echo $i; ?>
                            </span>
                        </p>
                    </li>

                <?php   
                        }                           // Chiusura IF
                        else {
                            echo '<li>I DISPARI NON LI MOSTRO</li>';
                        }
                    }                               // Chiusura FOR
                ?>
            </ul>
            <ul>
                <?php
                   foreach ($team as $i => $member) {     // Apertura FOREACH
                ?>

                    <li>
                        <div>
                            <?php echo $i; ?>
                        </div>
                        <div>
                            Nome: <?php echo $member['name']; ?>
                        </div>
                        <div>
                            Cognome: <?php echo $member['lastname']; ?>
                        </div>
                        <div>
                            Ruolo: <?php echo $member['role']; ?>
                        </div>
                    </li>

                <?php   
                    }                               // Chiusura FOREACH
                ?>
            </ul>
            <ul>
                <?php
                   foreach ($team[0] as $chiaveDellArrayAssociativo => $valoreDellArrayAssociativo) {     // Apertura FOREACH
                ?>

                    <li>
                        <?php
                            echo $chiaveDellArrayAssociativo.': ';
                            echo $valoreDellArrayAssociativo;
                        ?>
                    </li>

                <?php   
                    }                               // Chiusura FOREACH
                ?>
            </ul>
        </main>        

        <script>
            const num = 3;

            if (num % 2 == 0) {
                console.log('Il numero è pari');
            }
            else {
                console.log('Il numero è dispari');
            }
        </script>
    </body>
</html>