<?php
/**
 * 
 * 
 * Traitement des données provenant du formulaire
 * 
 * 
 */
// Si les données du formulaire sont envoyés via la méthode POST,
// Alors ,
//2. Protéger le serveur contre les fauilles de sécurité
// 2a. les failles de type csrf
// 2b. L es robots supérieurs

// 3. Procéder à la validation des données du formulaire

//4. S'il exsite au moins une erreur détectée par le système,
// Alors,

//4a. Sauvegarder les messages d'erreurs en session, pour affichage à l'écran de l'utillsateur

//4b. Sauvegarder les anciennes données provenant du formuklaire de session

//4c. Effectuer une redirection vers la page de laquelle proviennent les informations
// Puis arrêter l'execution du script.

//5. Dans le cas contratire,
// 5a.Arrondir la note à un chiffre après la virgule

  // 6. Etablir une connexion avec la base de données

        // 7. Effectuer la requête d'insertion du nouveau film dans la table prévue (film)

        // 8. Générer le message flash de succès

        // 9. Effectuer une redirection vers la page listant les films ajoutés (index.php)
        // Puis arrêter l'exécution du script.
?>

<?php include_once __DIR__ . "/../partials/head.php"; ?>

<?php include_once __DIR__ . "/../partials/nav.php"; ?>


   <!-- Main: Le contenu spécifique à cette page -->
     <main class="container">
       <h1 class="text-center my-3 display-5">Nouveau film</h1>
      
    <!-- Formulaire d'ajout d'un nouveau film-->
   <div class= "container">
       <div class="row">
           <div class= "col-md-8 col-lg-5 mx-auto p-4 bg-white shadow rounded">
             <form  method="post">
             
             <div class= "mb-3">
                    <label for="title">Titre <span class="text-danger">*</span></label>
                   <input type="text" name="title" id="title" class="form-control" autofocus required>
             </div>
               <div class= "mb-3">
                  <label for="rating">Note / 5</label>
                  <input type="number" min="0" max="5" step=".5" inputmode="decimal" name="rating" id="rating"    class="form-control">
              </div>
             <div class= "mb-3">
              <label for="comment">Laissez un commentaire</label>
              <textarea name="comment" id="comment" class="form-control"></textarea>
             </div>
             <div>
              <input type="submit" value= "Ajouter" class= " btn btn-primary shadow">
             </div>
             </form>
           </div>
     </div>
   </div>
</main>
  
<?php include_once __DIR__ . "/../partials/footer.php"; ?>

<?php include_once __DIR__ . "/../partials/foot.php"; ?>
