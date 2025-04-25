<!DOCTYPE html>
<html>

<body>

    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    $x = 0;

    while ($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>

    <?php
    $i = 1;

    do {
        if ($i == 3) break;
        echo $i;
        $i++;
    } while ($i < 6);
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }
    ?>

</body>

</html>