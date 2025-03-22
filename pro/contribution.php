<?php



$dsn = 'mysql:host=localhost;dbname=exercice;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

    

$stmt = $pdo->prepare("SELECT SUM(contribution) AS montant FROM utilisateurs");
$stmt->execute();
$somme = $stmt->fetch();

/*$stmt->execute();
$utilisateurs = $stmt->fetchAll();
$somme=array_sum($utilisateurs);*/
echo "<p>la somme totale des contribution dans la base  de donnée<br> s'eleve a   <strong>" .$somme['montant'] ." </strong>    FCFA </p>";


$stmt->closeCursor();

?> 
