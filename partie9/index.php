<?php

// PHP - Les dates
// Pour tous les exercices, vous pouvez utiliser le site http://php.net
// N'hesitez pas à faire des pages avec du HTML/CSS

// Exercice 1
// Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
echo date('d/m/Y');
echo '<br><br>';

// Exercice 2
// Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

echo date('d-m-y');
echo '<br><br>';

// Exercice 3
// Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
// Bonus : Le faire en français.
echo date('l j F Y');
// en francais
setlocale(LC_TIME, 'fr_FR.UTF8');
echo '<br><br>';

// Exercice 4
// Afficher le timestamp du jour.
// Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo time();
echo '<br>';

echo strtotime('2016-08-02 15:00:00');
echo '<br><br>';


// Exercice 5
// Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.

echo (time() - strtotime('2016-05-16')) / 86400;
echo '<br><br>';

// Exercice 6
// Afficher le nombre de jour dans le mois de février de l'année 2016.
echo cal_days_in_month(CAL_GREGORIAN, 2, 2018);
echo '<br><br>';

// Exercice 7
// Afficher la date du jour + 20 jours.

echo date('d/m/Y', strtotime('+20 days'));
echo '<br><br>';

// Exercice 8
// Afficher la date du jour - 22 jours

echo date('d/m/Y', strtotime('-22 days'));
echo '<br><br>';
