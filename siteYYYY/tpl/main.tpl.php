<?php
load::$layout   =   'default.tpl.php';
load::$title    =   'Site YYYY';
?>


<h1>Php Hot Rod</h1>

<p>SiteYYYY main page</p>

<p><a href="/next">Next Page</a></p>

<br />
<br />

<h3>Basic class for siteYYYY</h3>
<p><? site::foo()?></p>

<h3>Extra class for siteYYYY</h3>
<p><? more\site::foo()?></p>

<h3>Composer from</h3>
<p>
<?
$autoload   =   __DIR__.'/../../vendor/autoload.php';
load::dump($autoload);
require_once $autoload;
?>
</p>


