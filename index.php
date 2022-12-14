<?php
    // variabile nome utente
    $name = $_GET['name'];
    $hello = "Ciao a tutti";
    $hello = str_replace("Ciao", "Buongiorno", $hello);
    $hello .= ", come va?";
    $students = ['Mario', 'Franco', 'Sara', [ 'Cinzia' ]];
    $students[] = "Maurizio";

    if( !empty($_GET['eta']) ) {
        if( $_GET['eta'] >= 18 ) {
            $age = "Sei maggiorenne";
        } else {
            $age = "Sei minorenne";
        }
    }

    $person = [
        "firstName" => "Samuele",
        "lastName" => "Madrigali",
        "age" => 31,
    ];
    $person['isMarried'] = false;

    $persons = [
        [
            "firstName" => "Samuele",
            "lastName" => "Madrigali",
            "age" => 31,
        ],
        [
            "firstName" => "Samantha",
            "lastName" => "Madrigali",
            "age" => 35,
        ],
        [
            "firstName" => "Remo",
            "lastName" => "Madrigali",
            "age" => 76,
        ]
    ];

    $classes = [
        'classe76' => ['Mario', 'Luisa','Antonio'],
        'classe77' => ['Samuele', 'Tiziano', 'Federica']
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php intro</title>
</head>
<body>
    <h1><?php echo $hello; ?> 😊, mi chiamo <?php echo $name; ?></h1>
    <h2>Lunghezza nome: <?php echo strlen($name); ?></h2>
    <h3>Nome del secondo studente: <?php echo $students[3][0]; ?></h3>

    <?php if( $age ): ?>
    <p><?php echo $age; ?></p>
    <?php endif; ?>
    
    <p><?php echo "Nome del secondo \"studente\" $students[1], nome del terzo studente $students[2]"; ?></p>
    <hr>
    <ul>
        <li>Nome: <?php echo $person['firstName']; ?></li>
        <li>Cognome: <?php echo $person['lastName']; ?> </li>
        <li>Età: <?php echo $person['age']; ?> </li>
        <li>Sposato: <?php echo $person['isMarried'] ? 'Si' : 'No'; ?></li>
    </ul>
    <hr>
    <h2>La mia Family ❤️</h2>
    <ul>
        <?php foreach( $persons as $element ) { ?>
        <li>
            <h4><?php echo $element['lastName']; ?></h4>
            <h4><?php echo $element['firstName']; ?></h4>
            <p><?php echo $element['age']; ?></p>
        </li>
        <?php } ?>
    </ul>
    <hr>
    <h2>Le ultime classi di Boolean</h2>
    <?php foreach($classes as $className => $class) { ?>
        <h3><?php echo $className; ?></h3>
        <ul>
            <?php foreach($class as $student) {
                echo "<li>$student</li>";
            } ?>
        </ul>
    <?php } ?>
</body>
</html>