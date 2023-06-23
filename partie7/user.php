<?php
echo "tableau GET : ";
var_dump($_GET);
echo '<br>';

echo "tableau POST : ";
var_dump($_POST);
echo '<br>';

echo "tableau FILES : ";
var_dump($_FILES);
echo '<br>';

echo '<br>';
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo $_GET['nom'];
    echo '<br>';
    echo $_GET['prenom'];
}

echo '<br>';

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    echo $_POST['nom'];
    echo '<br>';
    echo $_POST['prenom'];
    echo '<br>';

    $filename = $_FILES['toto']['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    if ($extension == 'pdf') {
        echo 'c\'est un pdf';
    }
}
