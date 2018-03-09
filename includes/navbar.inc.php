<?php
$menuItemsAdmin = array(
    array("home", "Home"),
    array("boekenlijstCRUD", "Admin Boekenlijst"),
    array("boekenlijst", "Boekenlijst"),
    array("ledenlijstCRUD", "Admin Ledenlijst"),
    array("ledenlijst", "Ledenlijst"),
    array("logout", "Logout")
);

$menuItemsUser = array(
    array("home", "Home"),
    array("boekenlijst", "Boekenlijst"),
    array("ledenlijst", "Ledenlijst"),
    array("logout", "Logout")
);

$menuItemsGuest = array(
    array("login", "Login"),
    array("registreren", "Registreren")
);


if(isset($_SESSION['role']))
{
    if($_SESSION['role'] == 'user')
    {
        $menuItems = $menuItemsUser;
    }

    if($_SESSION['role'] == 'admin')
    {
        $menuItems = $menuItemsAdmin;
    }
}

else
{
    $menuItems = $menuItemsGuest;
}
?>

<div>
<ul class="barnav nav nav-pills justify-content-center">
    <?php
        foreach($menuItems as $menuItem)
        {
            echo '<li class="nav-item">
            <a class="nav-link baritem" href="index.php?page='. $menuItem[0].'">'. $menuItem[1].'</a>
            </li>';
        }
    ?>
</ul>
</div>