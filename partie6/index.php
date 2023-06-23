<?php
// Exercice 1
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?lastname=Nemare&firstname=Jean

var_dump($_GET);
echo "<br>";
echo "<br>";
echo " lastname :" . $_GET['lastname'];
echo "<br>";
echo " firstname :" . $_GET['firstname'];


// Exercice 2
// Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : 
// index.php?lastname=Nemare&firstname=Jean

echo "<br>";
echo "<br>";

if (isset($_GET['lastname']) && $_GET['lastname'] != "") {
    echo " lastname :" . $_GET['lastname'];
    echo "<br>";
} else {
    echo "il manque lastname";
    echo "<br>";
}

if (isset($_GET['firstname']) && $_GET['firstname'] != "") {
    echo " firstname :" . $_GET['firstname'];

    echo "<br>";
} else {
    echo "il manque firstname";
    echo "<br>";
}

echo "<br>";
echo "<br>";


// Exercice 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?startDate=2/05/2016&endDate=27/11/2016

if (isset($_GET['startDate']) && $_GET['startDate'] != "") {
    echo " startDate :" . $_GET['startDate'];
    echo "<br>";
} else {
    echo "il manque startDate";
    echo "<br>";
}

if (isset($_GET['endDate']) && $_GET['endDate'] != "") {
    echo " endDate :" . $_GET['endDate'];

    echo "<br>";
} else {
    echo "il manque endDate";
    echo "<br>";
}

echo "<br>";
echo "<br>";



// Exercice 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?language=PHP&server=LAMP

if (isset($_GET['language']) && $_GET['language'] != "") {
    echo " language :" . $_GET['language'];
    echo "<br>";
} else {
    echo "il manque language";
    echo "<br>";
}

if (isset($_GET['server']) && $_GET['server'] != "") {
    echo " server :" . $_GET['server'];

    echo "<br>";
} else {
    echo "il manque server";
    echo "<br>";
}

echo "<br>";
echo "<br>";

// Exercice 5
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?week=12

if (isset($_GET['week']) && $_GET['week'] != "") {
    echo " week :" . $_GET['week'];
    echo "<br>";
} else {
    echo "il manque week";
    echo "<br>";
}

echo "<br>";
echo "<br>";

// Exercice 6
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?building=12&room=101

if (isset($_GET['building']) && $_GET['building'] != "") {
    echo " building :" . $_GET['building'];
    echo "<br>";
} else {
    echo "il manque building";
    echo "<br>";
}

if (isset($_GET['room']) && $_GET['room'] != "") {
    echo " room :" . $_GET['room'];

    echo "<br>";
} else {
    echo "il manque room";
    echo "<br>";
}

echo "<br>";
echo "<br>";
