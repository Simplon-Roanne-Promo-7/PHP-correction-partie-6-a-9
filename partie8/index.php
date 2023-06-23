<?php
session_start();

function pretyDump($data)
{
    highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
}
// Exercice 1
// Faire une page HTML permettant de donner à l'utilisateur :
// son User Agent
// son adresse ip
// le nom du serveur

pretyDump($_SERVER);

// Exercice 2
// Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
// Il faudra afficher le contenu de ces variables sur la deuxième page.
echo '<br><br>Exercice 2<br><br>';
$lastName = 'tototto';
$firstName = 'tatatat';
$age = 22;

$_SESSION['lastName'] = $lastName;
$_SESSION['firstName'] = $firstName;
$_SESSION['age'] = $age;


?>
<a href="page2.php">vers page2</a>

<?php
// Exercice 3
// Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.
// Exercice 4
// Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.

echo '<br><br>Exercice 3<br><br>';

?>

<form action="page2.php" method="post">
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Envoyer">
</form>

<?php





// Exercice 5
// Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.