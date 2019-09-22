<?php
    include("common/header.php");
    include("common/menu.php");

    session_start();
    if(!isset($_SESSION["chiffreAleatoire"])) {
        $_SESSION["chiffreAleatoire"] = rand(1,100);
    }
    

?>
<h1>Le cinquième exercice</h1>

<h1 class="table">Trouver le nombre choisi par l'ordinateur</h1>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser"><br/><br/>
</form>

<form action="#" method="POST">
<label for="chiffre">Quel est le chiffre :</label>
<input type="number" name="chiffre" id="chiffre"><br/><br/>
<input type="submit" value="Essayer">
</form>

<?php
    if(isset($_POST['reinit']) && $_POST['reinit'] === "yes" ) {
        $_SESSION["chiffreAleatoire"] = rand(1,100);
    }
    // echo $_SESSION["chiffreAleatoire"];
    $chiffreAleatoire = $_SESSION["chiffreAleatoire"];

    if(isset($_POST['chiffre']) && $_POST['chiffre'] > 0 ) {
        $chiffreSaisi = (int)$_POST['chiffre'];
        echo "<h2>";
        if($chiffreAleatoire === $chiffreSaisi) { 
            echo "c'est gagné ! le chiffre était : $chiffreAleatoire" ;
        } else {
            if($chiffreAleatoire > $chiffreSaisi) {
                echo "Le chiffre est plus grand";
            } else {
                echo "Le chiffre est plus petit";
            }
        }
        echo "</h2>";
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php
    include("common/footer.php");
?>