<?php
setcookie("chocolateChip", "deze coockie is lekker numnum nummmm", time() + 3600);
$cookie =$_COOKIE["chocolateChip"];
echo "<br>Gebruikersnaam is: $cookie <br>";
print_r($_COOKIE);


?>
