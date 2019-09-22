<?php
    include("common/header.php");
    include("common/menu.php");

?>
<h1>Le deuxième exercice</h1>

<h1 class="table">Affichage des tables de multiplication avec un champ pour choisir sa table</h1>
<form action="#" method="GET">
    <label for="table">Table de multiplication :</label>
<input type="number" name="table" id="table">
<input type="submit" value="Envoyer">
</form>

<?php
if(isset($_GET["table"])) {
    echo "<h2>La table de " . $_GET["table"] . "</h2>";

    for($i = 0; $i <= 10; $i++) {
        echo $i . " x " . $_GET["table"] . " = " . $i * $_GET["table"] . "<br/>";
    }
} else {
    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
}
?>


<?php
    include("common/footer.php");
?>