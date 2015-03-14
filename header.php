<!DOCTYPE html>
<?php
 require("config/config.php");
 $connection = new PDO($dsn, $username, $passwd);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $config_blogname; ?></title>
        <link rel="stylesheet" href="styles/stylesheet.css" type="text/css" />
    </head>
    <body>
        <div id="header"><h1><?php echo $config_blogname; ?></h1>
            [<a href="index.php">home</a>]
            
        </div>
        <div id="main">
    </body>
</html>
