<!DOCTYPE html>
<html>
<head>
    <title><?= load::$title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-language" content="ru" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8;" />
	
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
    <script src="<?= load::makefile('/t/_adminYYYY.js', '_adminYYYY.js') ?>"></script>
    <link href="<?= load::makefile('/t/_adminYYYY.css', '_adminYYYY.css') ?>" rel="Stylesheet" />
    
</head>
<body>

<?= load::$body ?>

</body>
</html>
