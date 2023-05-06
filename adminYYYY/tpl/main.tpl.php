<?
load::$layout   =   'default.tpl.php';
load::$title    =   'Admin YYYY';
?>


<h1>Php Hot Rod - Admin</h1>
<div>Admin main page</div>

<p><a href="/next">Next Page</a></p>

<h3>Admin name is "<?= aYY::$admin->getName() ?>" from global class "<?= aYY::class ?>"</h3>

<form action="">
    <h3>Ftoken for tag form</h3>
    <?= ftoken::input() ?>
    <?// load::vd($_SESSION) ?>
</form>