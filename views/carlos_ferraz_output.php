<?php
// define a constant with the title 
define("TITLE", "OUTPUT");
?>

<!doctype html>
<html lang="en-US">
<?php require('./templates/head.php'); ?>

<body>
    <div class="container">
        <?php require_once('./templates/mainNav.php'); ?>
    </div>

    <?php
    // loads the html code for the foot area, with calls to js code
    // from bootstrap and specific for the web page
    // used to facilitate maintenance of code that
    // appears as the same in multiple pages
    require_once('./templates/foot.php');
    ?>
</body>

</html>