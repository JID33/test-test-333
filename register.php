<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pays = $_POST['pays'];
    $telephone = $_POST['telephone'];
    $methode = $_POST['methode_paiement'];

    // Enregistrement dans un fichier texte
    $contenu = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nPays: $pays\nTéléphone: $telephone\nPaiement: $methode\n\n";
    file_put_contents("inscriptions.txt", $contenu, FILE_APPEND);

    // Envoi d’un email de confirmation (fonctionne si ton serveur PHP supporte mail())
    $to = $email;
    $subject = "Confirmation d'inscription - COOPERATIVE R2C1";
    $message = "Bonjour $prenom $nom,\n\nMerci pour votre inscription à la COOPERATIVE R2C1. Votre méthode de paiement est : $methode.\n\nÀ bientôt !\n\nL’équipe R2C1";
    $headers = "From: noreply@cooperative-r2c1.local";

    // ⚠️ Cette fonction ne fonctionne pas sur tous les serveurs locaux sans configuration SMTP
    if (mail($to, $subject, $message, $headers)) {
        // Redirection vers une page merci
        header("Location: ../merci.html");
        exit();
    } else {
        echo "Inscription enregistrée mais l'e-mail n'a pas pu être envoyé.";
    }
}
?>
