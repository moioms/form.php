<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="telephone">Nom :</label>
        <input type="tel" id="telephone" name="user_phone">
    </div>
    <select name="topic">
        <option value="demande d'aide">besoin d'aide</option>
        <option value="demande de conseils">besoin de conseils</option>
        <option value="demande de rendez-vous">besoin d'un rendez-vous</option>
    </select>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>