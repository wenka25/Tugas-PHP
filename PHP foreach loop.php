<!DOCTYPE html>
<html>

<body>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }
    ?>

    <?php
    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }
    ?>

    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y<br>";
    }
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }
    ?>

    <pre>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") $x = "pink";
}

var_dump($colors);
?>
</pre>

    <pre>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
}

var_dump($colors);
?>
</pre>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) :
        echo "$x <br>";
    endforeach;
    ?>

</body>

</html>