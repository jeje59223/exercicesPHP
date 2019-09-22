<?php 
    include("common/header.php");
    include("common/menu.php");

    $p1 = [
        "Nom" => "Luke",
        "Img" => "player.png",
        "Age" => 27,
        "Sexe" => true,
        "Force" => 9,
        "Agilite" => 12
    ];
    $p2 = [
        "Nom" => "Leia",
        "Img" => "playerF.png",
        "Age" =>27,
        "Sexe" => false,
        "Force" => 4,
        "Agilite" => 8
    ];
    $p3 = [
        "Nom" => "Yann",
        "Img" => "playerM.png",
        "Age" => 31,
        "Sexe" => true,
        "Force" => 6,
        "Agilite" => 5
    ];

    $persos = [$p1, $p2, $p3];
?>

<h1 class="table">Selection du personnage</h1>

<h2>Personnage :</h2>
<?php
foreach($persos as $perso) {
echo "<div class='gauche'>";
    echo "<img src='sources/images/" . $perso['Img'] . "' alt='" . $perso['Img'] . "'/>";
echo "</div>";
echo "<div class='gauche'>";
afficherPerso($perso);
echo "</div>";     
echo "<div class='clearB'></div>";

}   
   
function afficherPerso($personnage) {
    foreach($personnage as $index => $value) {
        if($index !== "Img" && $index !== "Sexe") {
            echo "<b>" . $index . "</b> : " . $value . "<br/>";
        }
        if($index === "Sexe") {
            echo "<b> Sexe </b> :";
            if($value) {
                echo " Homme <br/>";
            } else {
                echo " Femme <br/>";
            }
        }
    }
}
?>

<?php 
    include("common/footer.php");
?>