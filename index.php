<?php

$title = "Home";
require_once "./includes/header.php";

if (!isset($_SESSION["username"])) {
    header('Location: login.php');
}
?>

<header class="container-fluid">
    <?php require_once "./includes/navbar.php"; ?>
</header>
<main class="container">
    <?php require_once "./includes/carousel.php"; ?>

    <?php require_once "./includes/trending-section.php"; ?>

    <?php require_once "./includes/all-games-section.php"; ?>
</main>

<?php require_once "./includes/footer.php";
