<?php
// filepath: c:\Users\PC\Desktop\Portfolio\contact.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $date = date("Y-m-d H:i:s");

    // Format de la ligne à enregistrer
    $ligne = "$date | Nom: $nom | Email: $email | Message: $message\n";

    // Enregistre dans un fichier texte (messages.txt)
    file_put_contents("messages.txt", $ligne, FILE_APPEND);

    echo "<p>Merci, votre message a bien été enregistré !</p>";
} else {
    echo "<p>Erreur : formulaire non soumis.</p>";
}
?>