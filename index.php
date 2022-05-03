<!--
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


-->

<?php

//phpinfo();

$name = 'Joe Black';

$length = strlen($name);

$bannedword = $_GET['banned'];

//echo($bannedword)

$censored = str_replace($bannedword, '***',$name);

//echo($name);


?>

<h1>Hi, my name is <?php echo($censored)?> </h1>


<p>The length of the string is: <?php echo($length)?> </p>