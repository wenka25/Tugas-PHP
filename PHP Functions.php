<!DOCTYPE html>
<html>

<body>

    <?php
    function myMessage()
    {
        echo "Hello world!";
    }

    myMessage();
    ?>

    <?php
    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>

    <?php
    function familyNama($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyNama("Hege", "1975");
    familyNama("Stale", "1978");
    familyNama("Kai Jim", "1983");
    ?>

    <?php
    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
    ?>

    <?php
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    ?>

    <?php
    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>

    <?php
    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a;
    ?>

    <?php
    function myFamily($lastname, ...$firstname)
    {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;
    ?>

    <?php
    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    ?>

</body>

</html>