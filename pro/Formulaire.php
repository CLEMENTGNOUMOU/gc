<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tableau.css">
    <title>Document</title>
    <link rel="stylesheet" href="Formule.cs">
</head>
<body>
 <!-- L'en-tête -->
 <?php include("entete.php");?>
 
 <!-- Le menu -->
 <?php include("menu.php");?>
 <!-- Le corps -->
 <div class="cadre">
        <div class="cercle"></div>
        <div class="cercle"></div>
        <div class="cercle"></div>
        <div class="cercle"></div>
        <div class="cercle"></div>
        <div class="cercle"></div>
    </div>
<div class="form">
   
    
    <form action="traitement.php" method="post">
    <h2>Ajouter un element</h2>
    <!--<label for="nom">saisir votre nom:</label>-->
    <input type="text"name="nom"placeholder="saisir votre nom:" require/><br><br>
    <!--<label for="prenom">saisir votre prenom(s):</label>-->
    <input type="text"name="prenom"placeholder="saisir votre prenom(s):" require/><br><br>
    <!-- <label for="mot_de_passe">saisir votre mot de pass:</label>-->
     <input type="password" name="mot_de_passe" placeholder="saisir votre mot de passe:" /><br><br>
     <!--<label for="nom">saisir votre contribution:</label>-->
    <input type="text" pattern="[0-9]+([.,][0-9]+)?" title="Entrez un nombre réel" name="contribution" placeholder="combien desirez-vous contribuer" require /><br><br>
 
 <input type="submit" value="soumettre" />
    </form> 
</div>

   <?php include("contribution.php");?>
   <?php include("tableau.php");?>
   <?php include("pieddepage.php");?>

</body>
</html>