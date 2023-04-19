<?php
load::$layout   =   'default.tpl.php';
load::$title    =   'Site YYYY';

// load::pr(__NAMESPACE__);
// die;
?>


<h1>Php Hot Rod</h1>

<p>SiteYYYY main page</p>

<p><a href="/next">Next Page</a></p>

<br />
<br />

<h3>Basic class for siteYYYY</h3>
<p><? siteYYYY::foo()?></p>

<h3>Composer from</h3>
<p>
<?
$autoload   =   __DIR__.'/../../vendor/autoload.php';
load::pr($autoload);
require_once $autoload;
?>
</p>


