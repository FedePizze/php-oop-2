<?php

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/registrati.php';
require_once __DIR__ . '/classes/prodotti.php';
require_once __DIR__ . '/classes/cartaDiCredito.php';

$DateAndTime = date('m');  
echo $DateAndTime;

$AlexUser = new user('Alex', 'Martin');
$LucasUser = new registrati('Lucas', 'Tatos', 'Luke-Tat', 'PasswordDiLucas');

$Cuccia = new prodotti('cucce', 'rosso', 30);
$Antipulci = new prodotti('antipulci', 'verde', 20);

$cartaDiCredito = new cartaDiCredito(17, 03, 2022);

var_dump($AlexUser);
var_dump($LucasUser);

var_dump($Cuccia);
var_dump($Antipulci);

var_dump($cartaDiCredito);



// if ($cartaDiCredito < date('m-d-Y h') {
//     echo "<h1>Fine</h1>";
// }

?>