<!DOCTYPE html>
<html>

<body>

    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <p></p>
    <?php
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
    }
    ?>

    <p></p>
    <?php
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
    }
    ?>

    <p></p>
    <?php
    for ($x = 0; $x <= 100; $x += 10) {
        echo "The number is: $x <br>";
    }
    ?>

</body>

</html>