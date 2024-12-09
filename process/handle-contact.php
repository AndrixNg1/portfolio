<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';  // Vérifiez que ce chemin est correct

// Vérification si le script est appelé via une requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $senderEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Vérifiez si les champs obligatoires sont remplis
    if (!$senderEmail || !$message) {
        die("Erreur : Veuillez remplir correctement tous les champs.");
    }

    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Serveur SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'andrixngoyi243@gmail.com';  // Votre adresse Gmail
        $mail->Password = 'zlal qbwz znxe zemf';  // Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom($senderEmail, 'Expéditeur');  // L'email de l'utilisateur qui envoie le message
        $mail->addAddress('andrixngoyi243@gmail.com', 'Votre Nom');  // Votre propre email pour recevoir le message

        // Contenu de l'email
        $mail->isHTML(true);  // Utilisation du format HTML
        $mail->Subject = 'Nouveau message depuis votre formulaire de contact';
        $mail->Body = "<p><strong>Email de l'expéditeur :</strong> $senderEmail</p>
                       <p><strong>Message :</strong></p>
                       <p>$message</p>";

        // Envoi de l'email
        $mail->send();
        echo 'Message envoyé avec succès.';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
