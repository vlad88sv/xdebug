<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once('library.class.php');
        require_once('library2.class.php');
        require_once('required.class.php');
        
        // Returns remote port + 50
        echo $libreria->getProcessedVar(50); // random value
        
        echo '<hr />'.PHP_EOL;
        
        echo '<p>Any value > 50 means you solved the error</p>';
        ?>
    </body>
</html>
