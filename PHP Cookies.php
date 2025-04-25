<!DOCTYPE html>
<html>

<head>
    <title>Cookie Handling Example</title>
</head>

<body>
    <h1>Cookie Handling Demo</h1>

    <?php
    // Initialize cookie name first to avoid undefined variable
    $cookie_name = "user";

    // Check if cookie exists (first check before setting)
    echo "<h2>Initial Cookie Check:</h2>";
    if (!isset($_COOKIE[$cookie_name])) {
        echo "<p>Cookie named '" . htmlspecialchars($cookie_name) . "' is not set!</p>";
    } else {
        echo "<p>Cookie '" . htmlspecialchars($cookie_name) . "' is set!<br>";
        echo "Value is: " . htmlspecialchars($_COOKIE[$cookie_name]) . "</p>";
    }

    // Set initial cookie
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    // Check cookie after setting (won't be available until next page load)
    echo "<h2>After Setting Cookie:</h2>";
    echo "<p>Cookie '" . htmlspecialchars($cookie_name) . "' has been set with value '" . htmlspecialchars($cookie_value) . "'.</p>";
    echo "<p>Note: You won't see the new cookie value until you refresh the page.</p>";

    // Modify cookie
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    echo "<h2>After Modifying Cookie:</h2>";
    echo "<p>Cookie '" . htmlspecialchars($cookie_name) . "' has been updated to '" . htmlspecialchars($cookie_value) . "'.</p>";

    // Delete cookie
    setcookie("user", "", time() - 3600);
    echo "<h2>After Deleting Cookie:</h2>";
    echo "<p>Cookie 'user' has been deleted.</p>";

    // Check if cookies are enabled
    echo "<h2>Cookie Status Check:</h2>";
    setcookie("test_cookie", "test", time() + 3600, '/');
    if (count($_COOKIE) > 0) {
        echo "<p>Cookies are enabled.</p>";
    } else {
        echo "<p>Cookies are disabled.</p>";
        echo "<p>Note: You may need to refresh to see accurate cookie status.</p>";
    }
    ?>

    <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Refresh Page</a> to see updated cookie status</p>
</body>

</html>