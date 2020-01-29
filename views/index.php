<?php
// defines the title of the page
define("TITLE", "INDEX");
?>

<!doctype html>
<html lang="en-US">
<!-- loads the script with the code for the head -->
<!-- separated to be reused through the pages -->
<?php require('./templates/head.php'); ?>

<body>
    <div class="container">
        <?php require('./templates/mainNav.php'); ?>
    </div>
    <div class="container">

    </div><!-- end of container -->

    <!-- loads the foot of the page, with calls to javascript code -->
    <?php require_once('./templates/foot.php'); ?>
</body>

</html>