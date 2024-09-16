<?php


function mult2($n)
{
    return ($n *2);
}

$a = [1, 2, 3, 4, 5];
// $b = array_map("mult2", $a);
// lambda
// $b = array_map(function($n){
//     return $n *2;
// }, $a);

$b = array_map(fn($n) => $n*2, $a);


print_r($b);


function creerFonction() {
    $nom = "Mozilla";
    
    // La closure capture la variable $nom
    return function() use ($nom) {
        echo $nom;
    };
}

$maFonction = creerFonction();
$maFonction(); // Affiche : Mozilla



function creerFonctionFn() {
    $nom = "Mozilla";
    
    // Utilisation d'une fonction fléchée, qui capture automatiquement $nom
    return fn() => $nom;
}

$maFonction = creerFonctionFn();
echo $maFonction(); // Affiche : Mozilla