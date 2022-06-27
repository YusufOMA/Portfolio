<?php
require 'functions.php';
$connection = dbConnect();


$voornaam = '';
$achternaam = '';
$email = '';
$bericht = '';

$errors = [];

//checken of er gegevens zijn opgestuurd
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //gegevens tonen en opslaan
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $tijdstip = date('Y-m-d H:i:s');

    if (isEmpty($voornaam)) {
        $errors['voornaam'] = 'Vul uw voornaam in a.u.b.';
    }
    if (isEmpty($voornaam)) {
        $errors['achternaam'] = 'Vul uw achternaam in a.u.b.';
    }

    if (!isvalidEmail($email)) {
        $errors['email'] = 'Dit is geen geldig e-mail adres';
    }

    if (!hasMinLength($bericht, 5)) {
        $errors['bericht'] = 'Vul minimaal 5 tekens in';
    }

    //print_r($errors);

    if (count($errors) == 0) {
        $sql = "INSERT INTO `berichten` ( `voornaam`, `achternaam`, `email`, `bericht`, `tijdstip`) 
    VALUES (:voornaam, :achternaam, :email, :bericht, :tijdstip); ";

        $statement = $connection->prepare($sql);
        $params = [
            'voornaam' => $voornaam,
            'achternaam' => $achternaam,
            'email' => $email,
            'bericht' => $bericht,
            'tijdstip' => $tijdstip

        ];
        $statement->execute($params);
        // stuurt bezoeker door naar de dank pagina
        header('Location: bedankt.html');
        exit;
    }
}

?>

<!DOCTYPE html>
<html class="form__alles" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detail.css">
    <title>Formulier</title>
</head>

<body class="form__body">
    <div class="container"></div>
    <h1>Formulier</h1>
    <section class="contact">
        <header>
            <h2>Wil je contact opnemen?</h2>
        </header>

        <form action="contact.php" method="POST" novalidate>
            <div class="form__field">
                <label for="voornaam" class="form">Voornaam</label>
                <input type="text" value="<?php echo $voornaam; ?>" id="voornaam" name="voornaam" placeholder="Vul uw voornaam in" required>

                <?php if (!empty($errors['voornaam'])) : ?>
                    <p class="form-error"><?php echo $errors['voornaam'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form__field">
                <label for="achternaam" class="form">Achternaam</label>
                <input type="text" value="<?php echo $achternaam; ?>" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required />

                <?php if (!empty($errors['achternaam'])) : ?>
                    <p class="form-error"><?php echo $errors['achternaam'] ?></p>
                <?php endif; ?>

            </div>

            <div class="form__field">
                <label for="voornaam" class="form">E-mail</label>
                <input type="email" value="<?php echo $email; ?>" id="email" name="email" placeholder="Vul uw email hier in" required />

                <?php if (!empty($errors['email'])) : ?>
                    <p class="form-error"><?php echo $errors['email'] ?></p>
                <?php endif; ?>
            </div>
            <div class="form__field">
                <label for="voornaam" class="form">Bericht</label>
                <textarea type="bericht" id="bericht" name="bericht" placeholder="Vul uw eventuele vragen hier in" required><?php echo $bericht; ?> </textarea>

                <?php if (!empty($errors['bericht'])) : ?>
                    <p class="form-error"><?php echo $errors['bericht'] ?></p>
                <?php endif; ?>
            </div>

            </div>
            <button type="submit" class="btn">Opsturen</button>
        </form>

    </section>

    </div>





</body>

</html>