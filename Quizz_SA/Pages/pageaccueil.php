admin

<?php

is_connect();

echo $_SESSION['user']['login']."<br>";
echo $_SESSION['user']['nom']."<br>";
echo $_SESSION['user']['prenom']."<br>";
echo $_SESSION['user']['profil']."<br>";
echo $_SESSION['user']['picture']."<br>";



?>

<a href="index.php?statut=logout">Deconnexion</a>