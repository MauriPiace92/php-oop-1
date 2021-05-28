<?php
    class User{

        public $nome;
        public $cognome;
        public $eta;
        public $città;
        public $provincia;
        public $indirizzo;

    }

// instanza 1;
$first= New User();
$first->nome='Roberto';
$first->cognome='Baggiio';
$first->eta='54';
$first->città='Vicenza';
$first->provincia='Vicenza';
$first->indirizzo='Via italiano migliore di tutti i tempi';

// instanza 2;
$second= New User();
$second->nome='Alessandro';
$second->cognome='Del Piero';
$second->eta='46';
$second->città='Padova';
$second->provincia='Padova';
$second->indirizzo='Via del Capitano';

// instanza 3;
$third= New User();
$third->nome='Francesco';
$third->cognome='Totti';
$third->eta='48';
$third->città='Roma';
$third->provincia='Roma';
$third->indirizzo='Via Pupone';

// instanza 4;
$fourth= New User();
$fourth->nome='George';
$fourth->cognome='Best';
$fourth->eta='65';
$fourth->città='Manchester';
$fourth->provincia='Manchester';
$fourth->indirizzo='Via Number 7';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP USERS</title>
</head>
<body>

    <h1>Lista Utenti</h1>

    <ul>
        <h3>UTENTE 1</h3>
        <li>
            <p>NOME: <?php echo $first->nome ?></p>
            <p>COGNOME: <?php echo $first->cognome ?></p>
            <p>ETA: <?php echo $first->eta ?></p>
            <p>CITTA: <?php echo $first->città ?></p>
            <p>PROVINCIA: <?php echo $first->provincia ?></p>
            <p>INDIRIZZO: <?php echo $first->indirizzo ?></p>

        </li>
    </ul>
    <ul>
        <h3>UTENTE 2</h3>
        <li>
            <p>NOME: <?php echo $second->nome ?></p>
            <p>COGNOME: <?php echo $second->cognome ?></p>
            <p>ETA: <?php echo $second->eta ?></p>
            <p>CITTA: <?php echo $second->città ?></p>
            <p>PROVINCIA: <?php echo $second->provincia ?></p>
            <p>INDIRIZZO: <?php echo $second->indirizzo ?></p>

        </li>
    </ul>
    <ul>
        <h3>UTENTE 3</h3>
        <li>
            <p>NOME: <?php echo $third->nome ?></p>
            <p>COGNOME: <?php echo $third->cognome ?></p>
            <p>ETA: <?php echo $third->eta ?></p>
            <p>CITTA: <?php echo $third->città ?></p>
            <p>PROVINCIA: <?php echo $third->provincia ?></p>
            <p>INDIRIZZO: <?php echo $third->indirizzo ?></p>

        </li>
    </ul>
    <ul>
        <h3>UTENTE 4</h3>
        <li>
            <p>NOME: <?php echo $fourth->nome ?></p>
            <p>COGNOME: <?php echo $fourth->cognome ?></p>
            <p>ETA: <?php echo $fourth->eta ?></p>
            <p>CITTA: <?php echo $fourth->città ?></p>
            <p>PROVINCIA: <?php echo $fourth->provincia ?></p>
            <p>INDIRIZZO: <?php echo $fourth->indirizzo ?></p>

        </li>
    </ul>
    
</body>
</html>