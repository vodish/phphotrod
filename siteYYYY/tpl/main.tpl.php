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


<?
if ( isset($_GET['cookie']) )
{
    if ( $_GET['cookie'] !== '' ) {
        // setcookie ('cookie', false, time()-1, '/', url::host());
        // setcookie ('cookie', false, time()-1);
        setcookie('cookie', $_GET['cookie'], time()+3600, '', '');
        // load::setcookie('cookie', $_GET['cookie'], time()+3600);
    }
    else {
        setcookie ('cookie', false, time()-1);
        // load::delcookie('cookie');
    }

    url::redir('./' .url::fset(['cookie'=>null]) );
}

load::vd(url::host());
load::vd($_COOKIE);

//phpinfo();
?>