<h1>Merci <?= $_POST["user_name"] . " " . $_POST["user_firstname"] ?> de nous avoir contacté à propos de votre <?= $_POST["topic"] ?>.

    Un de nos conseiller vous contactera soit à l’adresse <?= $_POST["user_email"] ?> ou par téléphone au <?= $_POST["user_phone"] ?> dans les plus brefs délais pour traiter votre demande :

    <?= $_POST["user_message"] ?></h1>