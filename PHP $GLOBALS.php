<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 75;

    function myfunction()
    {
        echo $GLOBALS['x'];
    }

    myfunction()
    ?>

    <?php
    $x = 75;

    function myfunct()
    {
        global $x;
        echo $x;
    }

    myfunct()
    ?>

    <?php
    $x = 100;

    echo $GLOBALS["x"];
    echo $x;
    ?>

    <?php
    function myfun()
    {
        $GLOBALS["x"] = 100;
    }

    myfun();

    echo $GLOBALS["x"];
    echo $x;
    ?>

</body>

</html>