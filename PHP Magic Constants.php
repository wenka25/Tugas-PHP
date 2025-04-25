<!DOCTYPE html>
<html>

<body>

    <?php
    class Fruits
    {
        public function myValue()
        {
            return __CLASS__;
        }
    }
    $kiwi = new Fruits();
    echo $kiwi->myValue();
    echo "<br>";

    echo __DIR__;
    echo "<br>";

    echo __FILE__;
    echo "<br>";

    function myFunction()
    {
        return __FUNCTION__;
    }
    echo myFunction();
    echo "<br>";

    echo __LINE__;
    echo "<br>";

    class Fruts
    {
        public function myValue()
        {
            return __METHOD__;
        }
    }
    $kiwi2 = new Fruts();
    echo $kiwi2->myValue();
    echo "<br>";

    function myNamespaceFunction()
    {
        return __NAMESPACE__;
    }
    echo myNamespaceFunction();
    echo "<br>";

    trait message1
    {
        public function msg1()
        {
            echo __TRAIT__;
        }
    }

    class Welcome
    {
        use message1;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    class NamespacedFruits
    {
        public function myValue()
        {
            return __CLASS__;
        }
    }
    $kiwi3 = new NamespacedFruits();
    echo $kiwi3->myValue();
    ?>

</body>

</html>