<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pass = $_POST['mot_de_passe'];
$contribution = floatval(str_replace(',', '.', $_POST['contribution']));


$dsn = 'mysql:host=localhost;dbname=exercice;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_POST['mot_de_passe']) AND isset($_POST['nom']) AND $_POST['mot_de_passe'] == "mot") {
    
$pdo->exec("INSERT INTO utilisateurs(nom, prenom, mot_de_passe, contribution) VALUES('$nom', '$prenom', '$pass', '$contribution')"); 

header("Location: Formulaire.php"); // Remplace index.php par ta page d'affichage
exit();
}
else{
echo '<p>Désolé M. votre mot de passe est incorrect <a href="Formulaire.php">retour</a></p>';
}
?> 