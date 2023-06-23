<?php
// PHP - Les formulaires

// Exercice 1
// Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
// Exercice 3
// Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
?>
<!-- 
<form action="user.php" method="get">
    <label for="nom">ton nom</label>
    <input type="text" name="nom" id="">

    <label for="prenom">ton prénom</label>
    <input type="text" name="prenom" id="">

    <button type="submit">allez vers user.php</button>
</form> 
-->

<?php
// Exercice 2
// Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.
// Exercice 4
// Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
?>
<!-- 

<form action="user.php" method="post">
    <label for="nom">ton nom</label>
    <input type="text" name="nom" id="">

    <label for="prenom">ton prénom</label>
    <input type="text" name="prenom" id="">

    <button type="submit">allez vers user.php</button>
</form>
-->

<?php

// Exercice 5
// Créer un formulaire sur la page index.php avec :

// Une liste déroulante pour la civilité (Mr ou Mme)
// Un champ texte pour le nom
// Un champ texte pour le prénom
// Ce formulaire doit rediriger vers la page index.php.
// Vous avez le choix de la méthode.

// Exercice 6
// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page.

?>

<?php
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    echo $_POST['nom'];
    echo '<br>';
    echo $_POST['prenom'];
    echo '<br>';

    echo $_POST['civilite'];
} elseif (isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo $_GET['nom'];
    echo '<br>';
    echo $_GET['prenom'];
    echo '<br>';

    echo $_GET['civilite'];
} else { ?>

    <form action="user.php" method="post" enctype="multipart/form-data">

        <label for="civilite">ta civilité</label>
        <select name="civilite" id="">
            <option value="Mr">Monsieur</option>
            <option value="Mme">Mme</option>
        </select>

        <label for="nom">ton nom</label>
        <input type="text" name="nom" id="">

        <label for="prenom">ton prénom</label>
        <input type="text" name="prenom" id="">

        <label for="toto">ta piece jointe</label>
        <input type="file" name="toto" id="">

        <button type="submit">allez vers user.php</button>
    </form>

<?php }






// Exercice 7
// Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

// Exercice 8
// Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.