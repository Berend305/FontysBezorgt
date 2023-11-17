<!DOCTYPE html>
<?php

// basis verwijzing
const ROOT = "/FontysBezorgt";

// classes
require_once("classes/DBConn.php");
require_once("classes/Pages.php");
require_once("classes/Product.php");

// session_start wordt zo opgeroepen over de gehele website
session_start();

?>
<html lang="en">
<head>
        <!-- bootstrap en eventueel eigen css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <?php $page = Pages::getHeader(); ?>
            <link rel="stylesheet" href="style.css">

            <title>Fontys Bezorgt</title>
    </head>
<body>
    <?php
        $page = Pages::getHeader();
        require_once("required/header.php");

        if ($page == "Home" ) {
            require_once("pages" . $page . ".php");
        } else {
            $page = empty($page) ? "Home" : $page;

            require_once("pages/" . $page . ".php");
        }
        
        require_once("required/footer.php");
    ?>
</body>
</html>