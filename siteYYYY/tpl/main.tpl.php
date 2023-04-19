<?php
load::$layout   =   'default.tpl.php';
load::$title    =   'Site YYYY';
?>


<h1>Php Hot Rod</h1>

<div>SiteYYYY main page</div>

<p><a href="/next">Next Page</a></p>

<hr />

<h3>Basic class for siteYYYY</h3>
<div><? sYY::test()?></div>

<h3>Specific class for siteYYYY</h3>
<?= user_sYY::getName() ?>
