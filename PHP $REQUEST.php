<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>

</html>