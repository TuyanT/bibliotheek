<?php
session_start()
?>

<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}   

else {
    $page="home";
}

if($page == "logout")
{
    header('location:php/logout.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="boot/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Bibliotheek Arnhem - Login</title>
    </head>

    <?php include "includes/navbar.inc.php"; ?>

    <?php include "includes/".$page.".inc.php"; ?>

    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>