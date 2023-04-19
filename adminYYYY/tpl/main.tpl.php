<?
load::$layout   =   'default.tpl.php';
load::$title    =   'Admin YYYY';
?>


<h1>Php Hot Rod - Admin</h1>

<p>Admin main page</p>

<p><a href="/next">Next Page</a></p>

<h3>Admin name is "<?= aYY::$admin->getName() ?>" from global class "<?= aYY::class ?>"</h3>

