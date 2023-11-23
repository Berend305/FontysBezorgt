<?php  
if (isset($_SESSION['studentnummer'])) {
    $studentnummer = $_SESSION['studentnummer'];

    echo "Studentnummer: " . $studentnummer;

    // unset($_SESSION['studentnummer']); // variabele verwijderen
    // session_destroy(); //sessievariabelen vernietigen
} else {
    echo "Geen studentnummer gevonden in de sessie";
}
?>
<main style="margin-top: 40%;">
<form action="" method="post">
<section id="broodjes">
        <h2 style="color: black; margin-left: 46%;">Broodjes</h2>
        <?php $broodjes = Product::selectBroodjes(); foreach ($broodjes as $broodje) : ?>
                <div class="broodje" style="color: black;">
                    <h3><?php echo $broodje['omschrijving']; ?></h3>
                    <p><?php echo $broodje['prijs']; ?></p>
                    <input type="number" name="aantal">
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="drankjes">
        <h2 style="color: black; margin-left: 46%;">Drankjes</h2>
        <?php $drankjes = Product::selectDrankjes(); foreach ($drankjes as $drankje) : ?>
                <div class="drankje" style="color: black;">
                <h3><?php echo $drankje['omschrijving']; ?></h3>
                    <p><?php echo $drankje['prijs']; ?></p>
                    <input type="number" name="aantal">
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="fruit">
        <h2 style="color: black; margin-left: 47%;">Fruit</h2>
        <?php $fruiten = Product::selectFruit(); foreach ($fruiten as $fruit) : ?>
                <div class="fruit" style="color: black;">
                <h3><?php echo $fruit['omschrijving']; ?></h3>
                    <p><?php echo $fruit['prijs']; ?></p>
                    <input type="number" name="aantal">
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="snacks">
        <h2 style="color: black; margin-left: 46%;">Snacks</h2>
        <?php $snacks = Product::selectSnacks(); foreach ($snacks as $snack) : ?>
                <div class="broodje" style="color: black;">
                <h3><?php echo $snack['omschrijving']; ?></h3>
                    <p><?php echo $snack['prijs']; ?></p>
                    <input type="number" name="aantal">
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%; margin-bottom: 50%;" id="snoep">
        <h2 style="color: black; margin-left: 46%;">Snoep</h2>
        <?php $snoepjes = Product::selectSnoep(); foreach ($snoepjes as $snoep) : ?>
                <div class="broodje" style="color: black;">
                <h3><?php echo $snoep['omschrijving']; ?></h3>
                    <p><?php echo $snoep['prijs']; ?></p>
                    <input type="number" name="aantal">
                </div>
            <?php endforeach; ?>
    </section>
    <input type="submit" name="submit" value="Toevoegen aan winkelwagen">
</form>
</main>

