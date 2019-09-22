<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1 class="table">Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage :</label>
    <select name="perso" id="perso">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>    
    <input type="submit" value="Valider">
</form>
<br/><br>
<?php 
    if(isset($_POST['perso'])){
       if($_POST['perso'] === "homme") {
            echo "<img src='sources/images/player.png' alt='player homme'";
       }else if($_POST['perso'] === "femme") {
            echo "<img src='sources/images/playerF.png' alt='player femme'";
       }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }

?>
<?php 
    include("common/footer.php");
?>