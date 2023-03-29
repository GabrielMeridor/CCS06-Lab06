<!DOCTYPE html>
<html>
<body>
    <?php
    echo "<h1> THANK YOU! </h1>";
    ?>

    Received <?php echo $_GET["Types"]; ?>
    message from <?php echo $_GET["complete_name"]?>

    (<?php echo $_GET["email"]?>)
    <br><br>

    (<?php echo $_GET["message"]?>)
    <br><br>

    Satisfaction Level: <?php echo $_GET["satisfaction_level"]?>

</body>
</html>