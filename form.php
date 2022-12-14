<?php

$database = [
    [
        "username" => "samuelemadrigali1991@gmail.com",
        "password" => "test"
    ]
];
$loggedin = false;

foreach( $database as $user ) {
    if( $user['username'] == $_POST['username'] && $user['password'] == $_POST['password'] ) {
        $loggedin = true;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php if( !$loggedin  ) { ?>
    <form action="form.php" method="POST">
        <input name="username" type="text" placeholder="Inserisci username" required>
        <input name="password" type="password" placeholder="Inserisci password" required>
        <button type="submit">Accedi</button>
    </form>
    <?php } ?>

    <?php if( $loggedin ) { ?>
    <h1>Pannello di amministrazione</h1>
    <?php } ?>
</body>
</html>