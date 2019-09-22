<?php 
    include("common/header.php");
    include("common/menu.php");

    $p1 = [
        "Nom" => "Luke",
        "Age" => 27,
        "Sexe" => "Homme",
        "Force" => 9,
        "Agilite" => 12
    ];
    $p2 = [
        "Nom" => "Leia",
        "Age" =>27,
        "Sexe" => "Femme",
        "Force" => 4,
        "Agilite" => 8
    ];
    $p3 = [
        "Nom" => "Yann",
        "Age" => 31,
        "Sexe" => "Homme",
        "Force" => 6,
        "Agilite" => 5
    ];
?>

<h1 class="table">Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage :</label>
    <select name="perso" id="perso" onchange="submit()">
        <option value="p1" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p1") echo "selected"?>>Luke</option>
        <option value="p2" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p2") echo "selected"?>>Leia</option>
        <option value="p3" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p3") echo "selected"?>>Yann</option>
    </select>   
</form>
<br/>
<h2>Personnage :</h2>
<?php 
    
       if(!isset($_POST['perso']) || $_POST['perso'] === "p1") {
            echo "<div class='gauche'>";
                echo "<img src='sources/images/player.png' alt='player Luke'/>";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p1);
            echo "</div>";
        } else if($_POST['perso'] === "p2") {
            echo "<div class='gauche'>";
                echo "<img src='sources/images/playerF.png' alt='player Leia'/>";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p2);
            echo "</div>";
        } else if($_POST['perso'] === "p3") {
            echo "<div class='gauche'>";
                echo "<img src='sources/images/playerM.png' alt='player Yann'/>";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPerso($p3);
            echo "</div>";
    } 
    echo "<div class='clearB'></div>";

function afficherPerso($personnage) {
    foreach($personnage as $index => $value) {
        echo "<b>" . $index . "</b> : " . $value . "<br/>";
    }
    // echo "Nom : " . $personnage[0] . "</br>";
    // echo "Age : " . $personnage[1] . "</br>";
    // if($personnage[2]) {
    //     echo "Sexe : Homme </br>";
    // } else {
    //     echo "Sexe : Femme </br>";
    // }
    // echo "Sexe : " . $personnage[2] . "</br>"; 
    // echo "Force : " . $personnage[3] . "</br>"; 
    // echo "Agilité : " . $personnage[4] . "</br>"; 
}
?>

<?php 
    include("common/footer.php");
?>