<?php
session_start();
function pretyDump($data)
{
    highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
}

echo $_SESSION['lastName'] . '<br>';
echo $_SESSION['firstName'] . '<br>';
echo $_SESSION['age'] . '<br>';


// Exercice 3
// Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.


pretyDump($_COOKIE);

$_COOKIE['login'] = "toto";
$_COOKIE['password'] = "tata";

pretyDump($_COOKIE);
