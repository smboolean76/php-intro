<?php
    // variabile nome utente
    $name = $_GET['name'];
    $hello = "Ciao a tutti";
    $hello = str_replace("Ciao", "Buongiorno", $hello);
    $students = ['Mario', 'Franco', 'Sara', [ 'Cinzia' ]];
    var_dump($students);
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
</body>
</html>