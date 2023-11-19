<?php

?>
<main style="margin-top: 40%;">
    <section id="broodjes">
        <h2 style="color: black; margin-left: 46%;">Broodjes</h2>
        <?php $broodjes = Product::selectBroodjes(); foreach ($broodjes as $broodje) : ?>
                <div class="broodje" style="color: black;">
                    <h3><?php echo $broodje['name']; ?></h3>
                    <p><?php echo $broodje['price']; ?></p>
                    <p><?php echo $broodje['description']; ?></p>
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="drankjes">
        <h2 style="color: black; margin-left: 46%;">Drankjes</h2>
        <?php $drankjes = Product::selectDrankjes(); foreach ($drankjes as $drankje) : ?>
                <div class="drankje" style="color: black;">
                    <h3><?php echo $drankje['name']; ?></h3>
                    <p><?php echo $drankje['price']; ?></p>
                    <p><?php echo $drankje['description']; ?></p>
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="fruit">
        <h2 style="color: black; margin-left: 47%;">Fruit</h2>
        <?php $fruiten = Product::selectFruit(); foreach ($fruiten as $fruit) : ?>
                <div class="fruit" style="color: black;">
                    <h3><?php echo $fruit['name']; ?></h3>
                    <p><?php echo $fruit['price']; ?></p>
                    <p><?php echo $fruit['description']; ?></p>
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%;" id="snacks">
        <h2 style="color: black; margin-left: 46%;">Snacks</h2>
        <?php $snacks = Product::selectSnacks(); foreach ($snacks as $snack) : ?>
                <div class="broodje" style="color: black;">
                    <h3><?php echo $snack['name']; ?></h3>
                    <p><?php echo $snack['price']; ?></p>
                    <p><?php echo $snack['description']; ?></p>
                </div>
            <?php endforeach; ?>
    </section>
    <section style="margin-top: 50%; margin-bottom: 50%;" id="snoep">
        <h2 style="color: black; margin-left: 46%;">Snoep</h2>
        <?php $snoepjes = Product::selectSnoep(); foreach ($snoepjes as $snoep) : ?>
                <div class="broodje" style="color: black;">
                    <h3><?php echo $snoep['name']; ?></h3>
                    <p><?php echo $snoep['price']; ?></p>
                    <p><?php echo $snoep['description']; ?></p>
                </div>
            <?php endforeach; ?>
    </section>
</main>

