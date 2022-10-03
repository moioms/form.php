<?php
$errors = [];
?>
<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" required>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname" required>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" required>
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="user_phone" required>
    </div>
    <select name="topic" required>
        <option value="demande d'aide">besoin d'aide</option>
        <option value="demande de conseils">besoin de conseils</option>
        <option value="demande de rendez-vous">besoin d'un rendez-vous</option>
    </select>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
    <div>
        <?php // Affichage des éventuelles erreurs 
        if (count($errors) > 0) : ?>
            <div class="border border-danger rounded p-3 m-5 bg-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

</form>