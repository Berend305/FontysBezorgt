<?php
session_start();

// Controleer of het formulier is ingediend
if (isset($_POST["Bevestig"])) {
    // Haal de ingediende gegevens op
    $studentnummer = $_POST["Studentnummer"];
    $gebouw = $_POST["gebouw"];
    $lokaal = $_POST["lokaal"];
    $tafel = $_POST["tafel"];

    // Sla de gegevens op in de sessie voor gebruik op de afrekenpagina
    $_SESSION["Bestelling"] = [
        "Studentnummer" => $studentnummer,
        "Gebouw" => $gebouw,
        "Lokaal" => $lokaal,
        "Tafel" => $tafel
    ];

    // Doorsturen naar bezorg.php om de bestelling in de database te plaatsen
    header("Location: bezorg");
    exit();
}
if (isset($_SESSION["Bestelling"]) && isset($_POST["Bevestig"])) {
    $studentnummer = $_SESSION["Bestelling"]["Studentnummer"];
    $gebouw = $_SESSION["Bestelling"]["Gebouw"];
    $lokaal = $_SESSION["Bestelling"]["Lokaal"];
    $tafel = $_SESSION["Bestelling"]["Tafel"];

    Bestelling::insertIntoBestelling($studentnummer, $gebouw, $lokaal, $tafel);
    
    unset($_SESSION["Bestelling"]); // Optioneel, vernietig de sessie na invoeren
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