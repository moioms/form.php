<?php
$errors = [];
$validate = "Merci "  . $_POST["user_name"] . " " . $_POST["user_firstname"] . " de nous avoir contacté à propos de votre " . $_POST["topic"] . "." .

    " Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"] . " ou par téléphone au " . $_POST["user_phone"] . " dans les plus brefs délais pour traiter votre demande : " .

    $_POST["user_message"] . ".";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST["user_name"]) || trim($_POST["user_name"]) === "") {
        $errors[] = "Vous devez saisir votre nom.";
    }
    if (empty($_POST["user_firstname"]) || trim($_POST["user_firstname"]) === "") {
        $errors[] = "Vous devez saisir votre prénom.";
    }
    if (empty($_POST["user_email"]) || trim($_POST["user_email"]) === "" || filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "Vous devez entrer un email valide.";
    }
    if (empty($_POST["user_phone"]) || trim($_POST["user_phone"]) === "") {
        $errors[] = "Vous devez saisir un numero de téléphone.";
    }
    if (empty($_POST["user_message"]) || trim($_POST["user_message"]) === "") {
        $errors[] = "Vous devez entrer un message.";
    }
    if (count($errors) === 0) {
        echo $validate;
    }
}

?>



<?php
if (count($errors) > 0) : ?>
    <div>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>