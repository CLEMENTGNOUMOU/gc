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

// Vérifier si un ID est envoyé via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sécurisation de l'ID

    // Récupérer les informations de l'utilisateur
    $sql = "SELECT * FROM utilisateurs WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $utilisateur = $result->fetch_assoc();
    } else {
        echo "Utilisateur introuvable.";
        exit();
    }
} else {
    echo "ID non spécifié.";
    exit();
}

// Mettre à jour les informations après soumission du formulaire
if (isset($_POST['update'])) {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $password = $conn->real_escape_string($_POST['mot_de_passe']);
    $contribution = $conn->real_escape_string($_POST['contribution']);


    // Requête de mise à jour
    $sql = "UPDATE utilisateurs SET nom='$nom', mot_de_passe='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Mise à jour réussie.";
        header("Location: Formulaire.php"); // Redirection après modification
        exit();
    } else {
        echo "Erreur lors de la mise à jour : " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier l'utilisateur</title>
</head>
<body>
    <h2>Modifier l'utilisateur</h2>
    <form method="POST" action="modifier.php">
        <input type="hidden" name="id" value="<?php echo $utilisateur['id']; ?>">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?php echo $utilisateur['nom']; ?>" required><br>
        <label>Prenom :</label>
        <input type="text" name="prenom" value="<?php echo $utilisateur['prenom']; ?>" required><br>
        <label>Mot de passe :</label>
        <input type="text" name="mot_de_passe" value="<?php echo $utilisateur['mot_de_passe']; ?>" required><br>
        <label>Contribution :</label>
        <input type="text" pattern="[0-9]+([.,][0-9]+)?" title="Entrez un nombre réel" name="contribution" value="<?php echo $utilisateur['contribution']; ?>" required><br>
        <button type="submit" name="update">Enregistrer</button>
    </form>
</body>
</html>