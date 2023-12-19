<html>
    <head>
        <title>Lab</title>
        <meta charset='utf-8'>  
    </head>
<body>    
    <h1> Lab </h1>
    <?php 
    if ($handle = opendir('.')) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {?>

                <a href="<?php echo $file; ?>" target="_blank"><?php echo ''.$file.''; ?></a><br><br>
<?php       }
        }
        closedir($handle);
    }

?>
</body>
</html>