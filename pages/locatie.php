<?php
if (isset($_POST["Bevestig"]))
{
    $_SESSION["Bestelling"] = $_POST["gebouw"] 
}



?>



<main style="margin-top: 50%; margin-bottom: 50%;">
    <form action="" method="post">
        <input type="number" name="Studentnummer">
        <select name="gebouw" id="gebouw">
            <?php foreach (Gebouw::selectGebouwList() as $gebouw) : ?>
            <option value="<?= $gebouw['Gebouwnaam']; ?>">
                <?= $gebouw['Gebouwnaam']; ?>    
            </option>
            <?php endforeach; ?>
        </select>
        <select name="lokaal" id="lokaal">
            <?php foreach (Lokaal::selectLokaalList() as $lokaal) : ?>
            <option value="<?= $lokaal['Lokaal']; ?>">  
                <?= $lokaal['Lokaal']; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <select name="tafel" id="tafel">
            <?php foreach (Tafel::selectTafelList() as $tafel) : ?>
            <option value="<?= $tafel['id']; ?>">  
                <?= $tafel['id']; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="Bevestig" value="Bevestig">
    </form>
</main>