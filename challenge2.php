<?php
//1er message
$firstMessage = "0@sn9sirppa@#?ia’jgtvryko1";
$resultat = 28 / 2;
$words = "chiffre clé de message 1 :";
$rest = substr($firstMessage, 14);
$restFinal = substr($rest, 6);

/*Affichage de la taille de la chaine
echo strlen($firstMessage);*/

echo $words . $resultat ;

/*Affiche la sous chaîne
echo "$rest";*/
echo "$restFinal";

/*Remplacer des caractères
$FirstMessage = str_replace('@#?', ' ',$firstMessage);*/

//2eme message
$secondMessage = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$resultats = 46 / 2;
$key = "chiffre clé de message 2 :";
$substring = substr($secondMessage, 23);
$final = substr($rest, 6);

/*Affichage de la taille de la chaine
echo strlen($secondMessage);*/

echo $key . $resultats ;

/*Affiche la sous chaîne
echo "$substring";*/

echo "$final";

/*Remplacer des caractères
$SecondMessage = str_replace('@#?', ' ',$SecondMessage);*/

//3eme message
$thirdMessage = "aopi?sgnirts@#?sedhtg+p9l!";
$half_numbers = 26 / 2;
$keys = "chiffre clé de message 3 :";
$half_words = substr($thirdMessage, 13);
$finalWords = substr($rest, 6);

/*Affichage de la taille de la chaine
echo strlen($thirdMessage);*/

echo $keys . $half_numbers;
/* Affiche la sous chaîne
echo $half_words;*/

/*Remplacer des caractères
$thirdMessage = str_replace('@#?', ' ',$thirdMessage);*/



