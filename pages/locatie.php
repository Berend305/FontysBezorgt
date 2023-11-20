<?php
session_start();

// Controleer of het formulier is ingediend
if (!empty($_POST["Bevestig"])) {

    // Haal de ingediende gegevens op
    $studentnummer = $_POST["Studentnummer"];
    $gebouw = $_POST["gebouw"];
    $lokaal = $_POST["lokaal"];
    $tafel = $_POST["tafel"];
    $robot = random_int(0,20);
    // ... andere gegevens ophalen

    // Sla het studentnummer op in de sessievariabele
    Bestelling::insertIntoBestelling($studentnummer, $gebouw, $lokaal, $tafel, $robot);
    $_SESSION['studentnummer'] = $studentnummer;

    // Doorsturen naar de bezorgpagina
    header("Location: bezorg");
    exit;
}

?>

<main style="margin-top: 50%; margin-bottom: 50%;">
    <form method="post">
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