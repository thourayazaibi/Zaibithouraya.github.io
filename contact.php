<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirection avec erreur (à améliorer)
        header("Location: index.php?success=0");
        exit;
    }

    // Destinataire (votre email)
    $recipient = "zaibithouraya@gmail.com";

    // Sujet du mail
    $subject = "Nouveau message de $name via portfolio";

    // Contenu du mail
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // En-têtes
    $email_headers = "From: $name <$email>";

    // Envoi du mail
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        header("Location: index.php?success=1");
    } else {
        header("Location: index.php?success=0");
    }
} else {
    header("Location: index.php");
}
?>
