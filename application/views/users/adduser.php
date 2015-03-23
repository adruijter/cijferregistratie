<h2><?php echo $header; ?></h2>
<form method="post" action="<?php echo BASE_URL.'users/adduser'; ?>">
    Voornaam: <input type="text" name="voornaam"><br>
    Tussenvoegsel: <input type="text" name="tussenvoegsel"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    <input type="submit" name="submit">
</form>