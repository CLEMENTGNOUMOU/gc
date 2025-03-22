
<?php



$dsn = 'mysql:host=localhost;dbname=exercice;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


    

$stmt = $pdo->prepare("SELECT id, nom, prenom, mot_de_passe, contribution FROM utilisateurs");
$stmt->execute();
$utilisateurs = $stmt->fetchAll();


    ?> 
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
     <table border="1" class="tableau">
        <caption>Données de la table</caption>
        <thead>
        <tr>
            <th width="100px">id</th>
            <th width="170px">nom</th>
            <th width="250px">prenom</th>
            <th width="120px">mot de passe</th>
            <th width="100px">Contribution</th>

            <th width="400px" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($utilisateurs as $utilisateur): ?>
            <tr>
                <td> <?php echo $utilisateur['id']; ?></td> 
                <td> <?php echo $utilisateur['nom'];?></td> 
                <td> <?php echo $utilisateur['prenom'];?></td> 
                <td> <?php echo $utilisateur['mot_de_passe'];?></td>
                <td> <?php echo $utilisateur['contribution'];?></td>
                <?php
                echo "<td>
                        <form method='POST' action='supprimer.php' onsubmit='return confirm(\"Voulez-vous vraiment supprimer cet utilisateur ?\")'>
                            <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                            <button type='submit'>Supprimer</button>
                        </form>
                      </td>";
                echo "<td>
                        <form method='POST' action='modifier.php'>
                            <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                            <button type='submit'>Modifier</button>
                        </form>
                       </td>";
                ?>

            </tr>
            <?php endforeach; ?>

        </tbody>

     </table>
    <?php

?> 














