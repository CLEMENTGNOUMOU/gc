<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercice"; // Remplace avec ta base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Vérifier si l'ID est bien envoyé via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sécurisation de l'ID

    // Requête SQL pour supprimer l'utilisateur
    $sql = "DELETE FROM utilisateurs WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }
} else {
    echo "Aucun ID spécifié.";
}

// Fermer la connexion
$conn->close();

// Rediriger vers la page précédente après suppression
header("Location: Formulaire.php"); // Remplace index.php par ta page d'affichage
exit();
?>