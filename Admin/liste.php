<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <meta charset="utf-8" />
  <title>Liste des fiches de procédures</title>
  <link rel="stylesheet" type="text/css" href="btn.css" />
 </head>
 
 <body>
    <img src="../img/logo-lareussite.png" class="logo" width="100px">
        <?php
  try  //Connection a la bdd
  {
   $bdd = new PDO('mysql:host=localhost;dbname=Gestion_ecole;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
   die('Erreur : ' . $e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM eleves WHERE archive = 0');
  
        echo '<center><div class="liste"><table>';
        echo '<tr>';
        echo '<th class="thliste">Id</th>';
        echo '<th class="thliste">Prénom</th>';
        echo '<th class="thliste">Nom</th>';
        echo '<th class="thliste">Date de naissance</th>';
        echo '<th class="thliste">Lieu de naissance</th>';
        echo '<th class="thliste">Cycle</th>';
        echo '<th class="thliste">Classe</th>';
        echo '<th class="thliste">Supprimer</th>';
        echo '<th class="thliste">Modifier</th>';
        echo '</tr>';
   
            while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
            {
    echo '<tr>';
      echo '<td class="tdliste">' . $donnees['id_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['prenom_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['nom_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['date_naissance_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['lieu_naissance_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['cycle_eleves'] . '</td>';
      echo '<td class="tdliste">' . $donnees['classe_eleves'] . '</td>';
      echo '<td class="tdliste"> 

      <a href="supprimer.php? id='.$donnees["id_eleves"].'" onclick="return confirm("Êtes-vous sûr de vouloir supprimer")"><span class="material-symbols-outlined">
      delete
      </span></a>
      </td>';
      echo '<td class="tdliste"> <button ><span class="material-symbols-outlined">edit</span></button></td>';
    echo '</tr>';
            }
  echo '</table></div></center>';
            $pdo = null;
        ?>
  
    <p>
      
  <form action="index.php" method="post">
   Numéro de fiche :<input type="text" name="id" id="id" size="1px" />
  </form>
  <div class="bouton">
     <p>
       <a href="principale.php" rel="nofollow noopener noreferrer" target="_blank">Retour</a>
    </p>
  </div>
    </body>
</html>