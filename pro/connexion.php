
<?php




$nom = $_POST['nom'];
$pass = $_POST['mot_de_passe'];


$dsn = 'mysql:host=localhost;dbname=exercice;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_POST['mot_de_passe']) AND isset($_POST['nom']) AND $_POST['mot_de_passe'] == "mot") {
    
$pdo->exec("INSERT INTO utilisateurs(nom, mot_de_passe) VALUES('$nom', '$pass')"); 

$stmt = $pdo->prepare("SELECT id, nom, mot_de_passe FROM utilisateurs");
$stmt->execute();
$utilisateurs = $stmt->fetchAll();


    ?> 
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
     <table border="1" >
        <caption>Données de la table</caption>
        <tr>
            <th width="100px">id</th>
            <th width="250px">nom</th>
            <th width="200px">mot de passe</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($utilisateurs as $utilisateur): ?>
            <tr>
                <td> <?php echo $utilisateur['id']; ?></td> 
                <td> <?php echo $utilisateur['nom'];?></td> 
                <td> <?php echo $utilisateur['mot_de_passe'];?></td>
                <?php
                echo "<td>
                        <form method='POST' action='supprimer.php' onsubmit='return confirm(\"Voulez-vous vraiment supprimer cet utilisateur ?\")'>
                            <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                            <button type='submit'>Supprimer</button>
                        </form>
                      </td>";
                ?>

            </tr>
            <?php endforeach; ?>


     </table>
    <?php
    header("Location: Formulaire.php"); // Remplace index.php par ta page d'affichage
    exit();
}
else{
    echo '<p>Désolé M. votre mot de passe est incorrect <a href="Formulaire.php">retour</a></p>';
}
?> 














