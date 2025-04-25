<!DOCTYPE html>
<html>

<body>

    <?php
    function divide($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <br>

    <?php
    function divide2($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide2(5, 0);
    } catch (Exception $e) {
        echo "Unable to divide.";
    }
    ?>

    <br>

    <?php
    function divide3($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide3(5, 0);
    } catch (Exception $e) {
        echo "Unable to divide. ";
    } finally {
        echo "Process complete.";
    }
    ?>

    <br>

    <?php
    function divide4($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide4(5, 1); // Diubah ke 1 agar tidak error
    } finally {
        echo "Process complete.";
    }
    ?>

    <br>

    <?php
    function divide5($dividend, $divisor)
    {
        if ($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide5(5, 0);
    } catch (Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message";
    }
    ?>

</body>

</html>