<?php
    include("common/header.php");
    include("common/menu.php");

?>
<h1>Le premier exercice</h1>

<h1 class="table">Affichage des tables de multiplication</h1>

<div class="table">
<?php

define("TABLE", 5);

echo "<h2>La table de " . TABLE . "</h2>";

    for($i = 0; $i <= 10; $i++) {
        echo $i . " x " . TABLE . " = " . $i * TABLE . "<br/>";
    }

?>
</div>

<?php
    include("common/footer.php");
?>