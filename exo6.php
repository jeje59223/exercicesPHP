<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1 class="table">Calculer une moyenne</h1>
<form action="#" method="GET">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb"><br/><br/>
    <input type="submit" value="Valider">
</form>
<br/><br>
<?php 
    if(isset($_GET['nb']) && $_GET['nb'] >0){
        $nbNotes = $_GET['nb'];
        echo "<form action=\"#\" method=\"POST\">";
        echo "<fieldset>";
        echo "<legend>Moyenne : </legend>";
        for($i = 1; $i <= $nbNotes ; $i++){
            echo "<label for=\"note".$i."\">Note". $i ." : </label>";
            echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required><br/><br/>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        
        if(isset($_POST['note1'])){
            $res = 0;
            for($i = 1; $i <= $nbNotes ; $i++){
                $res += $_POST['note'.$i];
            }
            echo "<br/><br/>";
            echo "La moyenne est : ". $res / $nbNotes;
        }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }

?>
<?php 
    include("common/footer.php");
?>