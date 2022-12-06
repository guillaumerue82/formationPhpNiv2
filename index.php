<?php
$day=time();
$date = unixtojd($day);
$names = ['Guillaume', 'Jean'];
foreach ($names as $name) {
    echo $name . "<br />";
}

$hash = sha1($names[1]);
echo $names[1] . ' devient ' . $hash . "<br />";

echo gmdate("Y-m-d H:i:s", $day);

$page = $_SERVER['PHP_SELF'];
$sec = "2";

?>

<!--<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 2 seconds!";
    ?>
    <p>Hello <?=$name?> !</p>
    </body>
</html>
-->

<?php
if ($names[0] == 'Guillaume') {
    echo "Beau gosse !";
} else {
    echo "Pas beau gosse";
}

