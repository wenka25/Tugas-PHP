<!DOCTYPE html>
<html>

<body>

    <!-- Form with PHP self-processing -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['fname'] ?? '');
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

    <!-- AJAX Example -->
    <script>
        function myfunction() {
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "demo_ajax.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.send("fname=Mary");
        }
    </script>

    <button onclick="myfunction()">Click me!</button>
    <h1 id="demo"></h1>

</body>

</html>