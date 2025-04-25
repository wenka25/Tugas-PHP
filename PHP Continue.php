<!DOCTYPE html>
<html>

<body>

    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    $x = 0;

    while ($x < 10) {
        $x++;
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    $i = 0;

    do {
        $i++;
        if ($i == 3) continue;
        echo $i;
    } while ($i < 6);
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }
    ?>

</body>

</html>